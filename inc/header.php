<?php

$script_base = basename($_SERVER['SCRIPT_NAME']);
$current_page = pathinfo($script_base, PATHINFO_FILENAME);

if (empty($current_page) || $current_page === 'main') {
    $current_page = 'index';
}

$nav_items = [
    ['label' => 'Home', 'url' => 'index', 'type' => 'link'],
    ['label' => 'About', 'url' => 'about', 'type' => 'link'],
    [
        'label' => 'Programs',
        'type' => 'dropdown',
        'items' => [
            ['label' => 'Project', 'url' => 'project'],
            ['label' => 'Event', 'url' => 'events']
        ]
    ],
    ['label' => 'Media', 'url' => 'media', 'type' => 'link'],
    ['label' => 'Get Involved', 'url' => 'get-involved', 'type' => 'link'],
    ['label' => 'Contact', 'url' => 'contact', 'type' => 'link'],
];

function get_nav_classes($item_url, $current_page)
{
    $base_classes = "px-3 py-2 rounded-lg transition-all duration-200 ";
    if ($item_url === $current_page) {
        return $base_classes . "bg-[#fdf8e6] text-black font-semibold";
    }
    return $base_classes . "hover:text-brandBlue text-gray-600";
}

function is_dropdown_active($dropdown_items, $current_page)
{
    foreach ($dropdown_items as $sub_item) {
        if ($sub_item['url'] === $current_page) {
            return true;
        }
    }
    return false;
}
?>

<header class="sticky top-0 flex justify-between items-center px-6 md:px-24 py-4 bg-white shadow-sm z-50">
    <div class="flex items-center gap-3">
        <img src="images/bc-logo.png" alt="Alpha Galleon Logo" class="w-15 h-15 object-contain">
        <span class="text-xl font-semibold text-gray-700 tracking-wide">Alpha Galleon</span>
    </div>

    <nav class="hidden md:flex items-center gap-4 text-sm font-medium">
        <?php foreach ($nav_items as $item): ?>
            <?php if ($item['type'] === 'link'): ?>
                <a href="<?php echo htmlspecialchars($item['url']); ?>"
                    class="<?php echo get_nav_classes($item['url'], $current_page); ?>">
                    <?php echo htmlspecialchars($item['label']); ?>
                </a>
            <?php elseif ($item['type'] === 'dropdown'):
                $dropdown_active = is_dropdown_active($item['items'], $current_page);
                $dropdown_bg = $dropdown_active ? 'bg-[#fdf8e6] text-black font-semibold' : 'text-gray-600 hover:text-brandBlue';
            ?>
                <div class="relative inline-block text-left">
                    <button id="dropdownBtn" class="px-3 py-2 rounded-lg transition-all duration-200 flex items-center gap-1 font-medium focus:outline-none <?php echo $dropdown_bg; ?>">
                        <?php echo htmlspecialchars($item['label']); ?> <i class="fa-solid fa-caret-down text-xs"></i>
                    </button>
                    <div id="dropdownMenu" class="hidden absolute left-0 mt-2 w-48 bg-white border border-gray-100 rounded-md shadow-lg py-1 z-50">
                        <?php foreach ($item['items'] as $sub_item):
                            $sub_active_style = ($sub_item['url'] === $current_page) ? 'bg-[#fdf8e6]/60 text-black font-semibold' : 'text-gray-700 hover:bg-gray-100';
                        ?>
                            <a href="<?php echo htmlspecialchars($sub_item['url']); ?>"
                                class="block px-4 py-2 text-sm transition-colors <?php echo $sub_active_style; ?>">
                                <?php echo htmlspecialchars($sub_item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>

    <button id="mobileMenuBtn" class="block md:hidden text-gray-600 hover:text-brandBlue focus:outline-none z-50">
        <i class="fa-solid fa-bars text-2xl"></i>
    </button>

    <div id="mobileMenu" class="hidden absolute top-full left-0 w-full bg-white shadow-md border-t border-gray-100 py-4 px-6 flex flex-col gap-2 text-sm font-medium text-gray-600 md:hidden z-40">
        <?php foreach ($nav_items as $item): ?>
            <?php if ($item['type'] === 'link'): ?>
                <a href="<?php echo htmlspecialchars($item['url']); ?>"
                    class="<?php echo get_nav_classes($item['url'], $current_page); ?>">
                    <?php echo htmlspecialchars($item['label']); ?>
                </a>
            <?php elseif ($item['type'] === 'dropdown'):
                $dropdown_active = is_dropdown_active($item['items'], $current_page);
                $dropdown_bg = $dropdown_active ? 'bg-[#fdf8e6] text-black font-semibold' : 'text-gray-600 hover:text-brandBlue';
            ?>
                <div class="w-full">
                    <button id="mobileDropdownBtn" class="w-full text-left flex justify-between items-center focus:outline-none px-3 py-2 rounded-lg transition-all <?php echo $dropdown_bg; ?>">
                        <?php echo htmlspecialchars($item['label']); ?> <i class="fa-solid fa-caret-down text-xs"></i>
                    </button>
                    <div id="mobileDropdownMenu" class="<?php echo $dropdown_active ? '' : 'hidden'; ?> pl-4 mt-2 flex flex-col gap-2 border-l border-gray-200">
                        <?php foreach ($item['items'] as $sub_item):
                            $sub_active_style = ($sub_item['url'] === $current_page) ? 'text-black font-semibold bg-[#fdf8e6] px-2 py-1 rounded' : 'text-gray-500 hover:text-brandBlue';
                        ?>
                            <a href="<?php echo htmlspecialchars($sub_item['url']); ?>"
                                class="py-1 transition-colors <?php echo $sub_active_style; ?>">
                                <?php echo htmlspecialchars($sub_item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</header>