<footer class="footer">
    <div class="container">
        <div class="flex-layout between linerTop endx">
            <div class="col-1">
                <div class="content">
                    <?php 
                        //$url_home = (get_home_url()); 
                        $dataContent = get_field("gsf_content","option"); 

                        echo $dataContent['description'];

                        if($dataContent['links'])
                        {
                            //var_dump($dataContent['links']);
                            echo "<div class='flex-layouxxxxt holder_links'>";
                            foreach($dataContent['links'] as $value => $item)
                            {
                                ?>
                                <a href="<?php echo $item['link']['url']; ?>"><?php echo $item['link']['title']; ?></a>
                                <?php
                            }
                            echo "</div>";
                        }
                        
                    ?>
                
                </div>     
            </div>
            <div class="col-2">
                <div class="holder_links_right">
                    <?php  
                        $dataIconSM = get_field("gsf_social_media","option");  
                        if($dataIconSM)
                        {
                            ?>
                            
                                <?php 
                                    foreach($dataIconSM['item'] as $value => $item)
                                    {
                                        ?>
                                        
                                            <a href="<?php echo $item['url']; ?>">
                                                <img src="<?php echo $item['icon']['url']; ?>">
                                            </a>
                                        
                                        <?php
                                    }
                                ?>
                            
                            <?php
                        }

                        $dataIconSM = get_field("gsf_logos","option");  
                        if($dataIconSM)
                        {
                            ?>
                            
                                <?php 
                                    foreach($dataIconSM['item'] as $value => $item)
                                    {
                                        ?>
                                        
                                            <a href="<?php echo $item['url']; ?>">
                                                <img src="<?php echo $item['logo']['url']; ?>">
                                            </a>
                                        
                                        <?php
                                    }
                                ?>
                            
                            <?php
                        }
                    ?>
                </div>
            </div>
            
            
        </div>




      
    </div>
</footer>