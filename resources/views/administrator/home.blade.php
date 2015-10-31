    <style>
        h1 {
            margin-bottom: 20px;
            font-size: 36px;
            font-weight: 500;
        }
        .alert-warning {
            background-image: linear-gradient(to bottom, #FCF8E3 0px, #F8EFC0 100%);
            background-repeat: repeat-x;
            border-color: #F5E79E;
            color: #8A6D3B;
        }
        .alert-info {
            background-image: linear-gradient(to bottom, #D9EDF7 0px, #B9DEF0 100%);
            background-repeat: repeat-x;
            border-color: #9ACFEA;
            color: #31708F;
        }
        .alert {
            padding: 15px;
            border: 1px solid;
            border-radius: 4px;
            margin-bottom: 20px;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.25) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .container {
            padding: 100px 25px 0 25px;
        }
    </style>
    <div class="container">
        <h1>Welcome to the database administration interface</h1>
        <div class="alert alert-warning">
            Beware that accidental changes on database tables may
            break website functionality or render users unable
            to login or work properly.
        </div>
        <div class="alert alert-info">
            In case any unknown error is thrown while managing the tables,
            please contact the backend developer.
        </div>
    </div>