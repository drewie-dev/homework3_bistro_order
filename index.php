<?php
require "./order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Bistro Order Form</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="page">
   <h1>Build Your Bistro Order</h1>

   <form action="process_order.php" method="post" class="order-form">

      <label for="dessert">Dessert</label>
      <select id="dessert" name="dessert">
         <option value="none">-- Choose a dessert --</option>
         <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
         <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
         <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
         <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
      </select>

      <label for="drink">Drink</label>
      <select id="drink" name="drink">
         <option value="none">-- Choose a drink --</option>
         <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
         <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
         <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
         <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
         <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
      </select>

      <fieldset class="drink-size">
         <legend>Drink Size</legend>

         <label>
            <input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected("Small"); ?>>
            Small
         </label>

         <label>
            <input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected("Medium"); ?>>
            Medium
         </label>

         <label>
            <input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected("Large"); ?>>
            Large
         </label>
      </fieldset>

      <div class="form-actions">
         <button type="submit">Submit Order</button>
         <a href="forget_order.php" class="forget-link">Forget Order</a>
      </div>

   </form>

   <div class="insight-card">
      <h2>Live guidance</h2>
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
   </div>

</main>

</body>
</html>