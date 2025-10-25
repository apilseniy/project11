<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Линейный поиск: PHP vs JS</title>
  <style>
    .step { font-family: monospace; margin: 4px 0; }
    .highlight { background-color: yellow; font-weight: bold; }
  </style>
</head>
<body>
  <h1>Линейный поиск: PHP vs JS (100 повторов)</h1>

  <label>Последовательность чисел (через запятую):</label><br>
  <input type="text" id="sequence" size="50"><br><br>

  <label>Искомое число:</label><br>
  <input type="text" id="target"><br><br>

  <button id="runJs">Запустить поиск на JS</button>
  <button id="runPhp">Запустить поиск на PHP</button>
  <button id="visualize">Показать процесс поиска</button>

  <h2>Результат JS:</h2>
  <pre id="resultJs"></pre>

  <h2>Результат PHP:</h2>
  <pre id="resultPhp"></pre>

  <h2>Визуализация поиска:</h2>
  <div id="visualization"></div>

  <script>
    function linearSearchJs(numbers, target, repeats = 1) {
      let index = -1;
      const originalLength = numbers.length;
      const start = performance.now();

      for (let r = 0; r < repeats; r++) {
        index = -1;
        numbers.push(target);
        let i = 0;
        while (numbers[i] !== target) {
          i++;
        }
        numbers.pop();
        if (i < originalLength) {
          index = i;
        }
      }

      const durationMs = performance.now() - start;
      return { index, duration_ms: durationMs, repeats };
    }

    const seqInput = document.getElementById('sequence');
    const targetInput = document.getElementById('target');
    const resultJs = document.getElementById('resultJs');
    const resultPhp = document.getElementById('resultPhp');
    const visualization = document.getElementById('visualization');

    document.getElementById('runJs').addEventListener('click', () => {
      const numbers = seqInput.value.split(',').map(x => x.trim()).map(Number);
      const target = Number(targetInput.value);
      const res = linearSearchJs(numbers, target, 1);
      resultJs.textContent = JSON.stringify(res, null, 2);
    });

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

    // 🔍 Визуализация линейного поиска с барьером
    document.getElementById('visualize').addEventListener('click', async () => {
      const numbers = seqInput.value.split(',').map(x => x.trim()).map(Number);
      const target = Number(targetInput.value);
      const originalLength = numbers.length;
      numbers.push(target);

      visualization.innerHTML = '';
      let i = 0;

      function showStep() {
        visualization.innerHTML = '';
        numbers.forEach((num, idx) => {
          const div = document.createElement('div');
          div.className = 'step';
          div.textContent = `Индекс ${idx}: ${num}`;
          if (idx === i) div.classList.add('highlight');
          visualization.appendChild(div);
        });

        if (numbers[i] !== target) {
          i++;
          setTimeout(showStep, 500); // задержка 500 мс
        } else {
          numbers.pop();
          const result = (i < originalLength) ? `Найдено на позиции ${i}` : 'Элемент не найден';
          const final = document.createElement('div');
          final.innerHTML = `<strong>${result}</strong>`;
          visualization.appendChild(final);
        }
      }

      showStep();
    });
  </script>
</body>
</html>
