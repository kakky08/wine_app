@extends('layouts.base')

@section('header')
    @include('parts.header.default')
@endsection

@section('side-bar')
    @include('parts.side-bar.folder')
@endsection

@section('section')
<div style="max-width: 30%">
    <canvas id="myChart"></canvas>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        // 作成したいチャートのタイプ
    type: 'radar',
    // データセットのデータ
    data: {
  //データの各項目のラベル(上から時計回り)
  labels: ["国語", "数学", "英語", "理科", "社会"],
  //データ設定
  datasets: [
    {
        //グラフのデータ(上から時計回り)
        data: [1,2,3,4,5],
        //グラフ全体のラベル
        label: "科目",
        //背景色
        backgroundColor: "rgba(255,0,0,0.5)",
        //線の終端を四角にするか丸めるかの設定。デフォルトは四角(butt)。
        borderCapStyle: "butt",
        //線の色
        borderColor: "rgba(255,255,0,1)",
        //線を破線にする
        borderDash: [],
        //破線のオフセット(基準点からの距離)
        borderDashOffset: 0.0,
        //線と線が交わる箇所のスタイル。初期値は'miter'
        borderJoinStyle: 'miter',
        //線の幅。ピクセル単位で指定。初期値は3。
        borderWidth: 3,
        //グラフを塗りつぶすかどうか。初期値はtrue。falseにすると枠線だけのグラフになります。
        fill: true,
        //複数のグラフを重ねて描画する際の重なりを設定する。z-indexみたいなもの。初期値は0。
        order: 0,
        //0より大きい値にすると「ベジェ曲線」という数式で曲線のグラフになります。初期値は0。
        lineTension: 0
    }
  ]
},
    //オプションの設定
  options: {
    scales: {
      r: {
        //グラフの最小値・最大値
        min: 0,
        max: 100,
        //背景色
        backgroundColor: 'snow',
        //グリッドライン
        grid: {
          color: 'pink',
        },
        //アングルライン
        angleLines: {
          color: 'green',
        },
        //各項目のラベル
        pointLabels: {
          color: 'blue',
        },
      },
    },
  },
});
// var ctx = document.getElementById("myChart").getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ["赤", "青", "黄色", "緑", "紫", "橙"],
//         datasets: [{
//             label: '得票数',
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255,99,132,1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         }
//     }
// });
</script>
@endsection
