<?php
header('Content-Type: application/json; charset=utf-8');

try {
    $input = json_decode(file_get_contents('php://input'), true);
    $numbers = $input['numbers'] ?? [];
    $target = $input['target'] ?? null;

    if (!is_array($numbers) || $target === null) {
        throw new Exception("Неверные входные данные");
    }

    $repeats = 100;
    $start = microtime(true);
    $index = -1;

    for ($r = 0; $r < $repeats; $r++) {
        $index = -1;
        foreach ($numbers as $i => $val) {
            if ($val == $target) {
                $index = $i;
                break;
            }
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
