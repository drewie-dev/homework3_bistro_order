<?php
require "./order_functions.php";
$orderSummary = order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Your Bistro Receipt</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="page">
   <h1>Your Order Receipt</h1>

   <div class="receipt-card"><?= $orderSummary; ?></div>

   <div class="insight-card">
      <h3>Order feedback</h3>
      <p><?= htmlspecialchars(completionMessage()); ?></p>
      <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
   </div>

   <div class="insight-card pricing-grid">
      <div>
         <h3>Estimated total</h3>
         <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
      </div>
      <div>
         <h3>Order profile</h3>
         <p><?= htmlspecialchars(orderProfile()); ?></p>
      </div>
      <p class="insight-note full-width-note"><?= htmlspecialchars(pricingNote()); ?></p>
   </div>

   <div class="form-actions">
      <a href="index.php" class="order-again-link">Order Again</a>
      <a href="forget_order.php" class="forget-link">Forget Order</a>
   </div>

</main>

</body>
</html>