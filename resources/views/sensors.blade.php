<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 56px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Sensors</div>
                <table>
                    <?php foreach($sensors as $sensor): ?>
                        <?php
                        /**
                         * @var $sensor
                         */
                        ?>
                        <tr>
                            <td><?php echo $sensor->name; ?> - </td>
                            <td><?php echo $sensor->value; ?></td>,
                            <td><?php echo $sensor->updated_at; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </body>
</html>
