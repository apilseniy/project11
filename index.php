<?php

// Definējam pieejamās lapas
$pages = [
    'home' => 'Sākums',
    'about' => 'Lineārais algoritms',
    'contact' => 'Lineārais alogoritms ar barjeru'
];

// Iegūstam aktīvo lapu no URL
$currentPage = isset($_GET['page']) && array_key_exists($_GET['page'], $pages)
    ? $_GET['page']
    : 'home';
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title><?= $pages[$currentPage] ?></title>
    <style>
        body { font-family: Arial, sans-serif; }
        nav ul { list-style: none; padding: 0; display: flex; gap: 15px; }
        nav a { text-decoration: none; color: #333; }
        .active { font-weight: bold; color: red; }
    </style>
</head>
<body>

<!-- Navigācija -->
<nav>
    <ul>
        <?php foreach ($pages as $key => $label): ?>
            <li>
                <a href="?page=<?= $key ?>" class="<?= $currentPage === $key ? 'active' : '' ?>">
                    <?= $label ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

<!-- Saturs -->
<main>
    <?php if ($currentPage === 'home'): ?>
        <h1>Sākums</h1>
        <p>Laipni lūdzam mūsu mājaslapā!</p>

    <?php elseif ($currentPage === 'about'):
        $content = file_get_contents('linearsearch.php');
		echo $content;
         ?>

    <?php elseif ($currentPage === 'contact'):
		$content = file_get_contents('linearsearchbarjer.php');
		echo $content;
	?>
        

    <?php else: ?>
        <h1>404</h1>
        <p>Lapa nav atrasta.</p>
    <?php endif; ?>
	</main>
	<body>
</html>