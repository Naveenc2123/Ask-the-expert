<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASK THE EXPERTS - Ask a Question</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: aquamarine;
            padding-top: 56px; /* Adjust based on header height */
        }
        header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1030;
        }
       
        .question-form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
        .question-card {
            margin-bottom: 20px;
        }
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }
        .rating input {
            display: none;
        }
        .rating label {
            cursor: pointer;
            width: 1em;
            font-size: 2rem;
            color: whitesmoke;
            text-shadow: 1px 1px #bbb;
        }
        .rating input:checked ~ label {
            color: #f70;
        }
        .rating label:hover,
        .rating label:hover ~ label {
            color:rgb(128, 22, 22);
        }
        p{
            margin: 0;
            padding: 30px; ;
            border: 0;
            background-color:white;

        }
        .container{
            width: 60%;
        }
        
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <p >
                such as walking, running, or yoga, helps maintain a healthy weight, improves cardiovascular health,
                 and boosts mood through the release of endorphins. A nutritious diet rich in fruits, vegetables, lean proteins,
                  and whole grains provides essential nutrients and energy. Staying hydrated and getting enough sleep are also crucial
                   for overall health. Managing stress through mindfulness, meditation, or hobbies can enhance mental health, while
                    maintaining social connections and seeking support when needed strengthens emotional well-being. Regular check-ups
                     with healthcare professionals ensure early detection and management of potential health issues. By integrating these
                      practices into daily life, individuals can achieve and maintain a healthy lifestyle.
            </p>
        </div>
    </div>
    <br>

    <div class="containers">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h5><center>Ask the more Question</center></h5>
                <br>
                <div class="question-form">
                    <form>
                        <div class="form-group">
                            <label for="questionTitle">Question Title</label>
                            <input type="text" class="form-control" id="questionTitle" placeholder="Enter your question title">
                        </div>
                        <div class="form-group">
                            <label for="questionDetails">Question Details</label>
                            <textarea class="form-control" id="questionDetails" rows="5" placeholder="Provide more details about your question"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="questionRating">Rate Your Question</label>
                            <div class="rating" id="questionRating">
                                <input type="radio" name="rating" id="rating-5" value="5"><label for="rating-5">★</label>
                                <input type="radio" name="rating" id="rating-4" value="4"><label for="rating-4">★</label>
                                <input type="radio" name="rating" id="rating-3" value="3"><label for="rating-3">★</label>
                                <input type="radio" name="rating" id="rating-2" value="2"><label for="rating-2">★</label>
                                <input type="radio" name="rating" id="rating-1" value="1"><label for="rating-1">★</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
