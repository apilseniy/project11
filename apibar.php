<?php
header('Content-Type: application/json; charset=utf-8');

try {
    $input = json_decode(file_get_contents('php://input'), true);
    $numbers = $input['numbers'] ?? [];
    $target = $input['target'] ?? null;

    if (!is_array($numbers) || $target === null) {
        throw new Exception("Неверные входные данные");
    }

    $repeats = 1;
    $start = microtime(true);
    $index = -1;
    $originalLength = count($numbers);

    for ($r = 0; $r < $repeats; $r++) {
        $index = -1;

        // 🔹 Добавляем барьер
        $numbers[] = $target;

        // 🔹 Линейный поиск без проверки выхода за границы
        $i = 0;
        while ($numbers[$i] != $target) {
            $i++;
        }

        // 🔹 Удаляем барьер
        array_pop($numbers);

        // 🔹 Проверяем, найден ли элемент до барьера
        if ($i < $originalLength) {
            $index = $i;
        }
    }

    $durationMs = (microtime(true) - $start) * 1000;

    echo json_encode([
        'index' => $index,
        'duration_ms' => $durationMs,
        'repeats' => $repeats
    ], JSON_UNESCAPED_UNICODE);
} catch (Throwable $e) {
    echo json_encode(['error' => $e->getMessage()]);
}