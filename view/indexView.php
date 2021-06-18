


<body>
    <div id="page">
        <div id="logo">
            <?php       
                echo '<img src="data:image/jpeg;base64,'.base64_encode($data['imageLogo']->getImageGraphic()).'" alt="The Analog System"/>';             
                
            ?>
          
        </div>
        <ul id="navigation">
            <li><a href="#" class="on">Home</a></li>
            <li><a href="<?php echo $this->url('start', 'productList')  ?>" class="on">For Sale</a></li>
            <li><a href="#" class="on">Repairs</a></li>
            <li><a href="#" class="on">About</a></li>
            <li><a href="#" class="on">Contact</a></li>
        </ul>
        <p>
           <?php  
                echo '<img src="data:image/jpeg;base64,'.base64_encode($data['ImageStart']->getImageGraphic()).'" alt="three products" />';         
           ?>
        </p>
        <p>
            We specialize in the sales and repair of boutique guitar pedals. Our best products are the Bigsky, the Timeline and the Mobius.
        </p>
    </div>
</body>

</html>



