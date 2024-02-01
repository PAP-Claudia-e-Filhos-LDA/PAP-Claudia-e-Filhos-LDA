<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Claudia & Filhos</title>
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
</head>

<body class="main-content">
  <main>
    <section class="container  active" id="encomenda">
      <div class="main-title ">
        <h2><span>CHEKCOUT</span><span class="bg-text">CHECKOUT</span></h2>
      </div>
      <?php
if (isset($_GET['details']) && isset($_GET['total'])) {
    // Obter detalhes do carrinho e total da URL
    $cartDetails = json_decode($_GET['details'], true);
    $total = $_GET['total'];

    // Iterar sobre os itens do carrinho
    foreach ($cartDetails as $item) {
        // Estrutura HTML para cada item do carrinho
        echo "
            <div class='cart-item hidden'>
                <div class='cart-img-box'  class='fancybox' >
                    <img src='{$item['imgSrc']}' alt='{$item['title']}' class='cart-img'>
                </div>
                <div class='detail-box'>
                    <div class='cart-product-title'><h3>{$item['title']}</h3></div>
                    <div class='cart-price'><p>{$item['price']}€</p></div>
                    <div class='cart-quantity-box'>
                        <label for='quantity'>Quantidade:</label>
                        <input type='text' value='{$item['quantity']}' class='cart-quantity' id='quantity' disabled>
                    </div>
                </div>
                <div class='cart-remove-box'>
                    <i class='fas fa-trash-alt cart-remove'></i>
                </div>
            </div><br>
            
            
        ";
    }

    // Imprimir o total formatado
    echo "
    <div class='total'>
        <div class='total-title'>Total</div>
        <div class='total-price'>€{$total}</div>
      </div>
    ";
} else {
    echo "<div class='empty-cart'>Nenhum item no carrinho.</div>";
}
?>

    
    </section>
  </main>

  <div class="controls">
    <a href="index.php">
      <div class="control" data-id="home">
        <i class="fas fa-home"></i>
      </div>
    </a>
    <a href="about.php">
      <div class="control" data-id="about">
        <i class="fas fa-book"></i>
      </div>
    </a>
    <a href="catalogo.php">
      <div class="control" data-id="catalogo">
        <i class="fas fa-lemon"></i>
      </div>
    </a>
    <a href="contact.php">
      <div class="control" data-id="contact">
        <i class="far fa-envelope-open"></i>
      </div>
    </a>
    <a href="profile.php">
      <div class="control" data-id="home">
        <i class="fas fa-user"></i>
      </div>
    </a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="../js/app.js"></script>
  <script src="../js/main.js"></script>
  <script>
    // Remove os parâmetros da URL após o carregamento da página
    history.replaceState({}, document.title, window.location.pathname);
</script>
</body>

</html>