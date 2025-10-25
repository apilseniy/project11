<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Линейный поиск: PHP vs JS</title>
</head>
<body>
  <h1>Линейный поиск: PHP vs JS (100 повторов)</h1>

  <label>Последовательность чисел (через запятую):</label><br>
  <input type="text" id="sequence" size="50"><br><br>

  <label>Искомое число:</label><br>
  <input type="text" id="target"><br><br>

  <button id="runJs">Запустить поиск на JS</button>
  <button id="runPhp">Запустить поиск на PHP</button>
<button id="showAnalysis">Показать анализ JS</button>

  <h2>Результат JS:</h2>
  <pre id="resultJs"></pre>

  <h2>Результат PHP:</h2>
  <pre id="resultPhp"></pre>

  <script>
let lastJsResult = null;
   function linearSearchJs(numbers, target, repeats = 1) {
  let index = -1;
  const steps = []; // Saglabā meklēšanas gaitu
  const start = performance.now();

  for (let r = 0; r < repeats; r++) {
    index = -1;
    steps.push(`🔁 Iterācija ${r + 1}:`);
    for (let i = 0; i < numbers.length; i++) {
      steps.push(`🔍 Salīdzinu: ${numbers[i]} ar ${target}`);
      if (numbers[i] == target) {
        index = i;
        steps.push(`✅ Atrasts pie indeksa ${i}`);
        break;
      }
    }
    if (index === -1) {
      steps.push(`❌ Vērtība ${target} nav atrasta`);
    }
  }

  const durationMs = performance.now() - start;
  return { index, duration_ms: durationMs, repeats, steps };
}


    const seqInput = document.getElementById('sequence');
    const targetInput = document.getElementById('target');
    const resultJs = document.getElementById('resultJs');
    const resultPhp = document.getElementById('resultPhp');

    // 🔹 Кнопка "JS"
    document.getElementById('runJs').addEventListener('click', () => {
  const numbers = seqInput.value.split(',').map(x => x.trim()).map(Number);
  const target = Number(targetInput.value);
  lastJsResult = linearSearchJs(numbers, target, 1); // 🔁 100 повторов

  resultJs.textContent = `Результат:\n` +
    `Index: ${lastJsResult.index}\n` +
    `Время: ${lastJsResult.duration_ms.toFixed(2)} ms\n\n` +
    `🔎 Анализ: нажмите кнопку ниже`;
});
document.getElementById('showAnalysis').addEventListener('click', () => {
  if (lastJsResult) {
    resultJs.textContent += `\n\n🔎 Подробности:\n` + lastJsResult.steps.join('\n');
  } else {
    resultJs.textContent = 'Сначала запустите поиск на JS.';
  }
});

   

    // 🔹 Кнопка "PHP"
    document.getElementById('runPhp').addEventListener('click', async () => {
      const numbers = seqInput.value.split(',').map(x => x.trim()).map(Number);
      const target = Number(targetInput.value);

      const response = await fetch('api.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ numbers, target })
      });
      const data = await response.json();
      resultPhp.textContent = JSON.stringify(data, null, 2);
    });
  </script>
</body>
</html>
