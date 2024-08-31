<?php

$table = array(
    "header" =>array(
        "Student ID",
        "Lastname",
        "Middlename",
        "Firstname",
        "Course",
        "Section",
        
    ),
    "body" =>array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
   array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )
    array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"

        )  
    )

)

?>

<table border="1">
    <tread>
    <tr>
        <?php foreach
        ($table[header] as $header):?>
        <th><?php echo
        hmtlspecialchars($header):?></th>
        <?php endforeach; ?>
        </tr>
        </thread>
        <tbody>
            <?php foreach ($table['body']as $row): ?>
                <tr>
                    <?php foreach ($table['header']as $header):?>
                        <td><?php echo
                        htmlspecialchars($row[$header]);?
                        ></td>
                        <?php endforeach; ?>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                        </table>
                        </body>
                        </html
                


