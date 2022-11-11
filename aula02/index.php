<select name="" id="">
<option selected> -- Selecione o dia --</option>

    <?php 
        for ($dia= 1; $dia <= 31; $dia++) {
             echo "<option>{$dia}</option>";
        }  
    ?>
</select>

<select name="" id="">
    <option selected> -- Selecione o mes --</option>
    <?php 
    $meses= ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
        for ($mes= 0; $mes <=11; $mes++){
            echo "<option>{$meses[$mes]}</option>";
        }
    
    ?>
</select>

<select name="" id="">
    <option selected> -- Selecione o ano --</option>
    <?php 
        for ($ano= 2022; $ano >= 1900; $ano--){
            echo "<option>{$ano}</option>";
        }
    
    ?>
</select>