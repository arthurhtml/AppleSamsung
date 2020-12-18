<?php
include ('header.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/Common.css" >
        <title>PTUT</title>
        <meta charset="utf-8">
    </head>

    <body>



       <h1>
           Les enjeux économiques
       </h1>

       <h3> L'economie d'Apple </h3>
        <div>
            <p>
                blablabla pour la dezcirption du cas economique d'apple
            </p>
        </div>

       <!-- TradingView Widget BEGIN -->
       <div class="tradingview-widget-container" style="width: 100%">
           <div id="tradingview_6f7b1"></div>
           <div class="tradingview-widget-copyright"><a href="https://fr.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a> par TradingView</div>
           <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
           <script type="text/javascript">
               new TradingView.MediumWidget(
                   {
                       "symbols": [
                           [
                               "Apple",
                               "AAPL"
                           ]
                       ],
                       "chartOnly": false,
                       "width": 1000,
                       "height": 400,
                       "locale": "fr",
                       "colorTheme": "dark",
                       "gridLineColor": "#2a2e39",
                       "trendLineColor": "#1976d2",
                       "fontColor": "#787b86",
                       "underLineColor": "rgba(55, 166, 239, 0.15)",
                       "isTransparent": false,
                       "autosize": false,
                       "container_id": "tradingview_6f7b1"

                   }
               );
           </script>
       </div>
       <!-- TradingView Widget END -->

       <H3>
           L'economie d'Android
       </H3>

        <div>
            <p>
                blablabalbalabl pour le cas economique d'android
            </p>
        </div>



  
    </body>

</html>

<?php include ('footer.php'); ?>