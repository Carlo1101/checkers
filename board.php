<!DOCTYPE html>
<html>
    <head>
        <style>
            .container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: auto;
                margin: 0 auto;
            }
            .row{
                display: flex;
                flex-direction: row;
            }
            .white-tile{
                /* border: 1px solid black; */
                background-color: #FFFDD0;
                /* display: block; */
                height: 90px;
                width: 90px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .black-tile{
                /* border: 1px solid black; */
                background-color: black;
                /* display: block; */
                height: 90px;
                width: 90px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .red-chip{
                height: 70px;
                width: 70px;
                border-radius: 35px;
                background-color: red;
            }
            .green-chip{
                height: 70px;
                width: 70px;
                border-radius: 35px;
                background-color: green;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php 
                $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
                $letters_top = ['A', 'B', 'C'];
                $letters_bottom = ['F', 'G', 'H'];

                $tile_name = 'tile';
                $tile_number = 0;
                $last_tile_is_white = true;
                $tile_class = 'white-tile';
                for($r = 0; $r < 8; $r++){

                    ?>
                        <div class="row">
                    <?php
                    if($tile_class == 'black-tile')
                        $tile_class = 'white-tile';
                    else
                        $tile_class = 'black-tile';

                    for($c = 1; $c <= 8; $c++){

                        if($tile_class=='black-tile'){
                            $tile_class='white-tile';
                        }else{
                            $tile_class='black-tile';
                        }
                        ?>
                            <div class='<?php echo $tile_class; ?>' id='<?php echo $letters[$r] . $c ; ?>'>
                                <?php
                                    if($tile_class == 'black-tile' && in_array($letters[$r], $letters_top)){
                                        echo '<div class="red-chip"></div>';
                                    }else if($tile_class == 'black-tile' && in_array($letters[$r], $letters_bottom)){
                                        echo '<div class="green-chip"></div>';
                                    }
                                ?>
                            </div>
                        <?php
                        $tile_number++;
                    }

                    ?>
                        </div>
                    <?php
                }
            ?>
        </div>
    </body>
</html>