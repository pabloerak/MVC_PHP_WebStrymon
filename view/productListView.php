<body>

    <div class="container mt2 mb-2" id="containerProductList" align="center">
        <div class="row justify-content-center mt-3" id="rowProductList" align="center">
            <div class="row justify-content-center mt-1" id="rowProductList" align="center">
                <h1>TITLE</h1>
            </div>
            
            <?php $img=$data['allImages'];?>
            
            <div class="row justify-content-center mt-1" id="rowProductList" align="center">
                
                <?php foreach($img as $row){ ?>
                   
                <div class="card" style="width: 18rem;">
                    
                    <?php  echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode($row->getImage()) . '" alt="' . $row->getProdname() . '" >'; ?>
                    
                    <div class="card-body" id="cardcontent">
                        <div id="cardtext">
                            <h5 class="card-title"><?php echo $row->getProdname() ?></h5>
                            <h7 class="card-text"><?php echo $row->getProddesc() ?></h7>
                        </div>
                        <br>
                        <div id="contentlink">
                            <a href="#" class="btn btn-primary align-items-end" id="pricelink" style="align-content: center"><?php echo $row->getPrice()?></a>
                        </div>
                    </div>
                </div>
                
                  <?php  }   ?>
                
            </div>

        </div>











    </div>

    
    
    
    
    
    
</body>