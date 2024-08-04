<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>

    <!-- chargement de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- chargement de Brython -->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/brython@3.12.4/brython.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/brython@3.12.4/brython_stdlib.js">
    </script>
</head>
<body>


    <div class="container">
        <div class="col-md-3">
            
            <button type="button" class="btn btn-primary">Reoad data</button>
        </div>
        
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">date</th>
                <th scope="col">EUR</th>
                <th scope="col">USD</th>
                <th scope="col">JPY</th>
                <th scope="col">GBP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">02.08.2024</th>
                <td>0.748104</td>
                <td>1</td>
                <td>93.242464</td>
                <td>0.644426</td>
                </tr>
                <tr>
                <th scope="row">01.08.2024</th>
                <td>0.748104</td>
                <td>1</td>
                <td>93.243364</td>
                <td>0.644426</td>
                </tr>
                <tr>
                <th scope="row">31.07.2024</th>
                <td>0.748174</td>
                <td>1</td>
                <td>93.245464</td>
                <td>0.644786</td>
                </tr>
            </tbody>
        </table>
    </div>
