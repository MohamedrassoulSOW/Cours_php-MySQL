<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    font-family: 'Poppins' sans-serif;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
    box-sizing: border-box;
}
/*------- Inscription et Connexion --------- */
.page-inscrire{
    background-color: #17a2b8;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
form{
    display: flex;
    flex-direction: column;
    background-color: #fff;
    padding: 10px;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
h3{
    text-align: center;
    font-size: 20px;
}
hr{
    margin: 10px 0;
    background-color: #ccc;
    border: 0;
    height: 1px;
    width: 100%;
}
.name-field{
    display: flex;
    width: 100%;
    justify-content: space-between;
}
.name-field div{
    display: flex;
    flex-direction: column;
    width: 49%;
}
label{
    margin-bottom: 6px;
}

input{
    margin-bottom: 5px;
    padding: 5px;
    outline: 0;
    border: 1px solid rgba(0,0,0,0.4);
}
input:focus{
    border: 1px solid #17a2b8;
}
input[type="submit"]{
    margin-top: 15px;
    background-color: #17a2b8;
    color: #fff;
    border: 1px solid #17a2b8;
    cursor: pointer;
}
p{
    text-align: center;
    margin: 5px 0;
    font-size: 16px;
}
p a{
    text-decoration: 0;
    color: #17a2b8;
}

    </style>
</head>
