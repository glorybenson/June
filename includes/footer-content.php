<div class="py-5 bg-light border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="footer-heading"><?= webSetting('title') ?? 'small descri'; ?></h6>
                <hr>
                <p><?= webSetting('small_description') ?? 'small descri'; ?></p>
            </div>
            <div class="col-md-4">
                <h4 class="footer-heading">Follow Us</h4>
                <hr>
                <u>
                    <?php  
                        $socialMedia = getAll('social_medias');
                        if($socialMedia){
                            if(mysqli_num_rows($socialMedia)){
                                foreach($socialMedia as $socialItem){
                                    ?>
                                        <li>
                                            <a href="<?=$socialItem['url']?>"> <?=$socialItem['name'] ?></a>
                                            
                                        </li>
                                    <?php
                                }
                            }else{
                                echo "<li>No Social Media adedd</li>";
                            }
                        }else{
                            echo "<li>Some thing Went Wrong</li>";
                        }
                    ?>
                </u>                
            </div>
            <div class="col-md-4">
                <h4 class="footer-heading">Contact Information</h4>
                <hr>
                <p>Address: <?= webSetting('address') ?? ''; ?></p>
                <p>Email: <?= webSetting('email1') ?? ''; ?> , <?= webSetting('email2') ?? ''; ?></p>
                <p>Phone: <?= webSetting('phone1') ?? ''; ?> , <?= webSetting('phone2') ?? ''; ?></p>
                
            </div>
        </div>
    </div>
</div>