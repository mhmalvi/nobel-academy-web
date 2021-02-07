<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        .wrapper{
            min-width: 100%;
            padding: 0px;
            margin: 0px;
        }

        .header{
            background-color: #eef1f6;
            padding: 15px;
            display: flex;
            justify-content: center;
        }

        .header-text{
            color: #1C375B;
            text-align: center;
        }

        .body{
            min-width: 60%;
            margin: auto;
        }

        .point{
            color: #1C375B;
        }

        table{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            width: 50%;
        }

        tr:nth-child(odd) {
            background-color: #EBF1F2;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <h2 class="header-text">Nobel Training Academy</span></h2>
        </header>

        <section class="body">
            <table class="info-table" cell-padding="5">
                <tbody>
                    <tr>
                        <td><strong class="point">Full Name</strong></td>
                        <td>{{$body['name']}}</td>
                    </tr>

                    <tr>
                        <td><strong class="point">Email Address</strong></td>
                        <td>{{$body['email']}}</td>
                    </tr>

                    <tr>
                        <td><strong class="point">Contact number</strong></td>
                        <td>{{$body['contact']}}</td>
                    </tr>

                    <tr>
                        <td><strong class="point">Nationality</strong></td>
                        <td>{{$body['nationality']}}</td>
                    </tr>

                    <tr>
                        <td><strong class="point">Course</strong></td>
                        <td>{{$body['course']}}</td>
                    </tr>

                    <tr>
                        <h4 class="point">Message:</h4>
                        <td colspan="2">{{$body['msg']}}</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>