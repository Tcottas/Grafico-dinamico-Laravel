<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gráfico Commits</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>

<body style="display: flex; align-items: center;">

    <div class="w-full bg-grey-500" style="display:flex; width: 27%">
        <div class="container" style="display: flex; justify-content: center;">
            <div class="container-titulo">
                <div class="titulo" style="text-align:center; margin-bottom:2px">Commits GitHub</div>
                <form method="post">
                    @csrf
                    <input type="number" name="10Dias" placeholder="Commits últimos 10 dias">
                    <p></p>
                    <input type="number" name="20Dias" placeholder="Commits últimos 20 dias">
                    <p></p>
                    <input type="number" name="30Dias" placeholder="Commits últimos 30 dias">
                    <p></p>
                    <input type="number" name="40Dias" placeholder="Commits últimos 40 dias">
                    <p></p>
                    <input type="number" name="50Dias" placeholder="Commits últimos 50 dias">
                    <p></p>
                    <input  type="number" name="60Dias" placeholder="Commits últimos 60 dias">
                    <p></p>
                    <input  type="number" name="70Dias" placeholder="Commits últimos 70 dias">
                    <p></p>
                    <input type="number" name="80Dias" placeholder="Commits últimos 80 dias">
                    <p></p>
                    <input type="number" name="90Dias" placeholder="Commits últimos 90 dias">
                    <p></p>
                    <button type="submit" value="salvar"style="width: 169px">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!------------------------------ ------------------------------->

    <div style="width:800px; display:flex; justify-content:center; magin-top:4px">
        <canvas id="myChart" style="display: flex"></canvas>
    </div>
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['10 days', '20 days', '30 days', '40 days', '50 days', '60 days','70 days', '80 days', '90 days'],
            datasets: [{
              label: 'Commits',
              data: [{{$dez}}, {{$vinte}}, {{$trinta}}, {{$quarenta}}, {{$cinquenta}}, {{$sessenta}}, {{$setenta}}, {{$oitenta}}, {{$noventa}}],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
      <script src="{{ asset('/js/chart.js')}}"></script>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>