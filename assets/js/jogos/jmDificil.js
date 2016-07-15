    function ScoreBoardGameControl() {
        var score = 0;
        var POINT_GAME = 10;

        var TOTAL_CORRECT = 15;
        var corrects = 0;

        this.updateScore = function () {
        }

        this.incrementScore = function () {
            corrects++;
            score += POINT_GAME;
            if (corrects == TOTAL_CORRECT) {
                alert("Fim de Jogo!");
            }
        }

        this.decrementScore = function () {
            score -= POINT_GAME;
        }
    }

    function Card(picture) {
        var FOLDER_IMAGES = 'img/jm_dificil/'
        var IMAGE_QUESTION = "question.jpg"
        this.picture = picture;
        this.visible = false;
        this.block = false;

        this.equals = function (cardGame) {
            if (this.picture.valueOf() == cardGame.picture.valueOf()) {
                return true;
            }
            return false;
        }
        this.getPathCardImage = function () {
            return FOLDER_IMAGES + picture;
        }
        this.getQuestionImage = function () {
            return FOLDER_IMAGES + IMAGE_QUESTION;
        }
    }

    function ControllerLogicGame() {
        var firstSelected;
        var secondSelected;
        var block = false;
        var TIME_SLEEP_BETWEEN_INTERVAL = 1000;
        var eventController = this;

        this.addEventListener = function (eventName, callback) {
            eventController[eventName] = callback;
        };

        this.doLogicGame = function (card, callback) {
            if (!card.block && !block) {
                if (firstSelected == null) {
                    firstSelected = card;
                    card.visible = true;
                } else if (secondSelected == null && firstSelected != card) {
                    secondSelected = card;
                    card.visible = true;
                }

                if (firstSelected != null && secondSelected != null) {
                    block = true;
                    var timer = setInterval(function () {
                        if (secondSelected.equals(firstSelected)) {
                            firstSelected.block = true;
                            secondSelected.block = true;
                            eventController["correct"]();
                        } else {
                            firstSelected.visible = false;
                            secondSelected.visible = false;
                            eventController["wrong"]();
                        }
                        firstSelected = null;
                        secondSelected = null;
                        clearInterval(timer);
                        block = false;
                        eventController["show"]();
                    }, TIME_SLEEP_BETWEEN_INTERVAL);
                }
                eventController["show"]();
            }
            ;
        };

    }

    function CardGame(cards, controllerLogicGame, scoreBoard) {
        var LINES = 5;
        var COLS = 6;
        this.cards = cards;
        var logicGame = controllerLogicGame;
        var scoreBoardGameControl = scoreBoard;

        this.clear = function () {
            var game = document.getElementById("game");
            game.innerHTML = '';
        }

        this.show = function () {
            this.clear();
            scoreBoardGameControl.updateScore();
            var cardCount = 0;
            var game = document.getElementById("game");
            for (var i = 0; i < LINES; i++) {
                for (var j = 0; j < COLS; j++) {
                    card = cards[cardCount++];
                    var cardImage = document.createElement("img");
                    if (card.visible) {
                        cardImage.setAttribute("src", card.getPathCardImage());
                    } else {
                        cardImage.setAttribute("src", card.getQuestionImage());
                    }
                    cardImage.onclick = (function (position, cardGame) {
                        return function () {
                            card = cards[position];
                            var callback = function () {
                                cardGame.show();
                            };
                            logicGame.addEventListener("correct", function () {
                                scoreBoardGameControl.incrementScore();
                                scoreBoardGameControl.updateScore();
                            });
                            logicGame.addEventListener("wrong", function () {
                                scoreBoardGameControl.decrementScore();
                                scoreBoardGameControl.updateScore();
                            });

                            logicGame.addEventListener("show", function () {
                                cardGame.show();
                            });

                            logicGame.doLogicGame(card);

                        };
                    })(cardCount - 1, this);

                    game.appendChild(cardImage);
                }
                var br = document.createElement("br");
                game.appendChild(br);
            }
        }
    }

    function BuilderCardGame() {
        var pictures = new Array('1.jpg', '1.jpg',
            '2.jpg', '2.jpg',
            '3.jpg', '3.jpg',
            '4.jpg', '4.jpg',
            '5.jpg', '5.jpg',
            '6.jpg', '6.jpg',
            '7.jpg', '7.jpg',
            '8.jpg', '8.jpg',
            '9.jpg', '9.jpg',
            '10.jpg', '10.jpg',
            '11.jpg', '11.jpg',
            '12.jpg', '12.jpg',
            '13.jpg', '13.jpg',
            '14.jpg', '14.jpg',
            '15.jpg', '15.jpg');

        this.doCardGame = function () {
            shufflePictures();
            cards = buildCardGame();
            cardGame = new CardGame(cards, new ControllerLogicGame(), new ScoreBoardGameControl())
            cardGame.clear();
            return cardGame;
        }

        var shufflePictures = function () {
            var i = pictures.length, j, tempi, tempj;
            if (i == 0) return false;
            while (--i) {
                j = Math.floor(Math.random() * ( i + 1 ));
                tempi = pictures[i];
                tempj = pictures[j];
                pictures[i] = tempj;
                pictures[j] = tempi;
            }
        }

        var buildCardGame = function () {
            var countCards = 0;
            cards = new Array();
            for (var i = pictures.length - 1; i >= 0; i--) {
                card = new Card(pictures[i]);
                cards[countCards++] = card;
            }
            ;
            return cards;
        }
    }

    function GameControl() {

    }

    GameControl.createGame = function () {
        var builderCardGame = new BuilderCardGame();
        cardGame = builderCardGame.doCardGame();
        cardGame.show();
    }