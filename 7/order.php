<h2>
    Ваше замовлення прийнято
</h2>
<ul>
    <li>Замовлено виріб - <?php echo htmlspecialchars($_POST['Виріб']); ?></li>
    <li>Матеріал - <?php echo htmlspecialchars($_POST['Матеріал']); ?></li>
    <li>Кількість – <?php echo (int)$_POST['Кількість']; ?></li>
</ul>
