<?php

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$projects = [
    [
        'number' => '01',
        'category' => 'JAVA PROGRAMMING',
        'title' => 'Simple Calculator',
        'description' => 'A beginner-friendly Java console application that performs basic arithmetic operations such as addition, subtraction, multiplication, and division.',
        'overview' => 'Simple Calculator is a basic Java application that accepts two numbers and an arithmetic operator from the user. It calculates and displays the result.',
        'role' => 'Java programming and implementation of basic arithmetic operations.',
        'tags' => ['Java', 'Scanner', 'Conditional Statements'],
        'screenshots' =>
            [
                [
                    'image' => 'images/CalculatorUi.png',
                    'caption' => 'Simple Calculator Interface'
                ],
            ],
        'snippets' => [
            [
                'title' => 'Basic Arithmetic Operations',
                'language' => 'java',
                'code' => <<<'JAVA'
                            double result = 0;

                            switch (operator) {

                                case '+':
                                    result = num1 + num2;
                                    break;

                                case '-':
                                    result = num1 - num2;
                                    break;

                                case '*':
                                    result = num1 * num2;
                                    break;

                                case '/':
                                    if (num2 != 0) {
                                        result = num1 / num2;
                                    } else {
                                        System.out.println("Error: Cannot divide by zero!");
                                    }
                                    break;

                                default:
                                    System.out.println("Invalid operator!");
                            }
                }
                JAVA,
                'explanation' => 'This code accepts two numbers and an arithmetic operator from the user. A switch statement determines which mathematical operation to perform and displays the calculated result.'
            ]
        ],
    ],
    [
        'number' => '02',
        'category' => 'JAVA PROGRAMMING',
        'title' => 'Login and Registration System',
        'description' => 'A simple Java console application that allows users to create an account and log in using their registered username and password.',
        'overview' => 'This beginner-level project demonstrates a basic account registration and login process. It uses Java programming concepts such as user input handling, string comparison, and conditional statements to validate user credentials.',
        'role' => 'Java programming, user input handling, and basic account validation.',
        'tags' => ['Java', 'User Authentication'],
        'screenshots' => [
            [
                'image' => 'images/Register.png',
                'caption' => 'User Registration Interface'
            ],
            [
                'image' => 'images/LogIn.png',
                'caption' => 'User Login Interface. It shows the validation of the registered username and password.'
            ],
        ],
        'snippets' => [
            [
                'title' => 'User Registration and Login',
                'language' => 'java',
                'code' => <<<'JAVA'
                if (choice == 1) {

                System.out.println("\n--- REGISTRATION ---");

                System.out.print("Create username: ");
                registeredUsername = input.nextLine();

                System.out.print("Create password: ");
                registeredPassword = input.nextLine();

                System.out.println("\nRegistration successful!");

                } else if (choice == 2) {

                System.out.println("\n--- LOGIN ---");

                if (registeredUsername.isEmpty()) {

                    System.out.println("Please register first!");

                } else {

                    System.out.print("Enter username: ");
                    String username = input.nextLine();

                    System.out.print("Enter password: ");
                    String password = input.nextLine();

                    if (username.equals(registeredUsername) &&
                        password.equals(registeredPassword)) {

                        System.out.println("\nLogin successful!");
                        System.out.println("Welcome, " + username + "!");

                    } else {

                        System.out.println("\nInvalid username or password!");

                    }
                }
                JAVA,
                'explanation' => 'This code handles user registration and login. It prompts the user to create a username and password for registration, and then allows them to log in using those credentials. It checks for valid input and displays appropriate messages based on the login attempt.'
            ]
        ],
        'link' => ''
    ],
    [
        'number' => '03',
        'category' => 'JAVA PROGRAMMING',
        'title' => 'Simple Grade Calculator App',
        'description' => 'A basic Java application that allows users to calculate and evaluate student grades.',
        'overview' => 'The Simple Grade Calculator App is developed using Java. It demonstrates basic programming concepts, user input handling, and conditional logic.',
        'role' => 'Java application development using console-based interface.',
        'tags' => ['Java', 'User Input', 'Conditional Logic', 'Average Calculation'],
        'screenshots' => [
            [
                'image' => 'images/CalculatorUi.png',
                'caption' => 'User Interface of the Simple Grade Calculator App. It allows users to input student name and grades for three subjects.'
            ],
            [
                'image' => 'images/GradeReport.png',
                'caption' => 'Grade Report Interface. It displays the calculated average and performance evaluation.'
            ],
        ],
        'snippets' => [
            [
                'title' => 'Button Click and Calculation',
                'language' => 'java',
                'code' => <<<'JAVA'
                double average = total / numberOfSubjects;

                System.out.println("\n==Grade Report==");

                System.out.println("Student Name: " + name);
                System.out.printf("Average Grade: %.2f%n", average);

                if (average >= 90) {
                    System.out.println("Performance: Excellent");
                } else if (average >= 80) {
                    System.out.println("Performance: Very Good");
                } else if (average >= 70) {
                    System.out.println("Performance: Good");
                } else if (average >= 60) {
                    System.out.println("Performance: Satisfactory");
                } else {
                    System.out.println("Performance: Needs Improvement");
                }
                JAVA,
                'explanation' => 'This code calculates the average grade and evaluates the student’s performance based on the calculated average.'
            ]
        ],
    ],
    [
        'number' => '04',
        'category' => 'ANDROID DEVELOPMENT',
        'title' => 'Simple Android App Calculator',
        'description' => 'A beginner-friendly Android app that performs basic arithmetic operations such as addition, subtraction, multiplication, and division.',
        'overview' => 'Simple Calculator is a basic Android application that accepts two numbers and an arithmetic operator from the user. It calculates and displays the result.',
        'role' => 'Android development and implementation of basic arithmetic operations.',
        'tags' => ['Android', 'Kotlin', 'UI Design'],
        'screenshots' =>
            [
                [
                    'image' => 'images/AndroidCalcu.jpg',
                    'caption' => 'Simple Calculator Interface'
                ],
                [
                    'image' => 'images/AndroidCalcuOutput.jpg',
                    'caption' => 'Output Screen after Calculation'
                ],
            ],
        'snippets' => [
            [
                'title' => 'Basic Arithmetic Operations',
                'language' => 'kotlin',
                'code' => <<<'KOTLIN'
                private fun calculate() {
                        try {
                            //get values
                            val firstNumber =
                                edtFirstNumber.text.toString().toDouble()

                            val secondNumber =
                                edtSecondNumber.text.toString().toDouble()

                            //checker
                            if (operator.isEmpty()) {
                                txtResult.text = "Result: Select an operation"
                                return
                            }

                            //calculation
                            val result = when (operator) {
                                "+" -> firstNumber + secondNumber
                                "-" -> firstNumber - secondNumber
                                "*" -> firstNumber * secondNumber
                                "/" -> {
                                    if (secondNumber == 0.0) {
                                        txtResult.text = "Result: Cannot divide by zero"
                                        return
                                    }
                                    firstNumber / secondNumber
                                }
                                else -> 0.0
                            }

                            //display result
                            txtResult.text = "Result: ${formatResult(result)}"

                        } catch (e: NumberFormatException) {
                            //invalid input
                            txtResult.text = "Result: Please enter valid numbers"
                        } catch (e: Exception) {
                            //unexpected error
                            txtResult.text = "Result: Something went wrong"
                        }
                    }
                KOTLIN,
                'explanation' => 'This code is a Kotlin function for an Android Studio Simple Calculator. Its purpose is to get two numbers from the user, identify the selected mathematical operator, perform the calculation, and display the result.'
            ]
        ],
    ],

    [
        'number' => '05',
        'category' => 'ANDROID DEVELOPMENT',
        'title' => 'Login and Registration App',
        'description' => 'A beginner-level Android application that provides registration and login screens, allowing users to enter their account information and access the application.',
        'overview' => 'This mobile application demonstrates basic Android navigation, input validation, and account registration and login functionality using Java and XML layouts.',
        'role' => 'Android application development, interface implementation, and input validation.',
        'tags' => ['Java', 'Android Studio', 'XML'],
        'screenshots' => [
                [
                    'image' => 'images/AndroidAppRegister.jpg',
                    'caption' => 'Registration Screen'
                ],
                [
                    'image' => 'images/AndroidAppOutput.jpg',
                    'caption' => 'Output Screen after successful login'
                ],
        ],
        'snippets' => [
            [
                'title' => 'Login Credential Validation',
                'language' => 'java',
                'code' => <<<'JAVA'
                // Get the inputted data
                String username = etUsername.getText().toString().trim();
                String email = etEmail.getText().toString().trim();
                String password = etPassword.getText().toString().trim();

                // Check if fields are empty
                if (username.isEmpty() ||
                        email.isEmpty() ||
                        password.isEmpty()) {

                    Toast.makeText(
                            RegisterActivity.this,
                            "Please fill in all fields.",
                            Toast.LENGTH_SHORT
                    ).show();

                } else {

                    // Create Intent
                    Intent intent = new Intent(
                            RegisterActivity.this,
                            SuccessActivity.class
                    );

                    // Pass the data to SuccessActivity
                    intent.putExtra("username", username);
                    intent.putExtra("email", email);
                    intent.putExtra("password", password);
                JAVA,
                'explanation' => 'This code handles input validation and transferring registration information from RegisterActivity to SuccessActivity. It checks whether the user has completed the registration form. If everything is filled in, it sends the entered information to another screen.'
            ]
        ],
    ],

    [
        'number' => '06',
        'category' => 'DATABASE / WEB API',
        'title' => 'PetCare+',
        'description' => 'A RESTful API for managing pet grooming reservations, services, schedules, and payment records.',
        'overview' => 'PetCare+ is an academic project developed using ASP.NET Core Web API and SQL Server. It organizes pet owners, pets, grooming services, reservations, schedules, and payments.',
        'role' => 'ASP.NET Core Web API development, database integration, and API testing.',
        'tags' => ['C#', 'ASP.NET Core', 'SQL Server', 'Swagger'],
        'screenshots' => [
            [
                'image' => 'images/postApiSwagger.png',
                'caption' => 'Swagger API endpoints - Users'
            ],
            [
                'image' => 'images/postApiRes.png',
                'caption' => 'API response output'
            ]
        ],

        'snippets' => [
            [
                'title' => 'Create User API Endpoint',
                'language' => 'csharp',
                'code' => <<<'CSHARP'
                [HttpPost]
                public async Task<ActionResult<UserResponseDto>> CreateUser(
                    UserCreateDto dto)
                {
                    var existingUser = await _context.Users
                        .FirstOrDefaultAsync(u => u.Email == dto.Email);

                    if (existingUser != null)
                    {
                        return Conflict(new
                        {
                            message = "Email is already registered."
                        });
                    }

                    var allowedRoles = new[] { "Customer", "Staff", "Admin" };

                    if (!allowedRoles.Contains(dto.Role))
                    {
                        return BadRequest(new
                        {
                            message = "Invalid role."
                        });
                    }

                    var user = _mapper.Map<User>(dto);

                    user.PasswordHash =
                        _passwordHasher.HashPassword(user, dto.Password);

                    _context.Users.Add(user);
                    await _context.SaveChangesAsync();

                    var result = _mapper.Map<UserResponseDto>(user);

                    return CreatedAtAction(
                        nameof(GetUser),
                        new { id = user.UserId },
                        result
                    );
                }
        CSHARP,
                'explanation' => 'This endpoint registers a new user. It checks whether the email is already registered, validates the requested role, hashes the password, saves the user to the database, and returns a Created response containing the user details.'
            ]
        ],
    ],

    [
        'number' => '07',
        'category' => 'SMALL BUSINESS PROJECT',
        'title' => 'PaperCharm Treasures',
        'description' => 'A school project that presents a collection of paper-based products, including prototypes and visual representations. It aims to show the products in a creative and appealing way and to inspire customer to explore the products.',
        'overview' => 'PaperCharm Treasures showcases a collection of paper-based products, emphasizing creativity, design, and presentation. The project includes prototypes and visual representations of the products.',
        'role' => 'Creative design, prototyping, and product presentation.',
        'tags' => ['Creativity', 'Product Design', 'Planning'],
        'screenshots' => [
            [
                'image' => 'images/paperCharmHome.png',
                'caption' => 'Home page of the PaperCharm Treasures project'
            ],
            [
                'image' => 'images/paperCharmShop.png',
                'caption' => 'Shop page of the PaperCharm Treasures project'
            ]
        ],
        'snippets' => [
            [
                'title' => 'Navigation Bar',
                'language' => 'html',
                'code' => <<<'HTML'
            <body>
                <!-- Main/navbar -->
                <header>
                    <nav class="navbar section-content">
                        <a href="index.php" class="nav-logo">
                            <h2 class="logo-text">⭐PaperCharm</h2>
                            <span class="logo-subtext">Treasures</span>
                        </a>

                        <ul class="nav-menu">
                            <button id="menu-close-button" class="fas fa-times"></button>

                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="shop.php" class="nav-link">Shop</a>
                            </li>

                            <li class="nav-item">
                                <a href="trackorder.php" class="nav-link">Track Order</a>
                            </li>

                            <li class="nav-item">
                                <a href="aboutus.php" class="nav-link">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <ul class="icons">
                            <li class="nav-icon">
                                <a href="cart.php" class="fa-solid fa-cart-plus"></a>
                            </li>

                            <li class="login user-dropdown">
                                <?php if(isset($_SESSION['email'])): ?>
                                    <a href="javascript:void(0)" class="login-btn">
                                        <i class="fa-regular fa-user"></i>
                                        <span>Hi, <?php echo htmlspecialchars($_SESSION['fName'] ?? 'User'); ?>!</span>
                                        <i class="fa-solid fa-chevron-down" style="font-size: 0.7rem;"></i>
                                    </a>

                                    <ul class="dropdown-content">
                                        <li class="dropdown-sub">
                                            <a href="purchase.php">My Purchase</a>
                                        </li>
                                        <li class="dropdown-sub">
                                            <a href="logout.php">Logout</a>
                                        </li>
                                    </ul>

                                <?php else: ?>
                                    <a href="login.php" class="login-btn">
                                        <i class="fa-regular fa-user"></i> Login
                                    </a>
                                <?php endif; ?>
                            </li>
                        </ul>

                        <button id="menu-open-button" class="fas fa-bars"></button>
                    </nav>
                </header>
            HTML,
                'explanation' => 'This code creates the navigation bar of PaperCharm Treasures. It includes links to the Home, Shop, Track Order, About Us, and Contact pages, along with a shopping cart and a user account dropdown.'
            ]
        ],
        'link' => 'https://papercharmtreasures.free.nf/'
    ],
    [
        'number' => '08',
        'category' => 'ANDROID DEVELOPMENT',
        'title' => 'Quiz App',
        'description' => 'A simple Android quiz application that lets users answer questions about Software Development using radio buttons and displays the results at the end of the quiz.',
        'overview' => 'The Quiz App is a mobile application developed with Java and XML layouts in Android Studio. It demonstrates basic Android interface design and quiz logic.',
        'role' => 'Android application development using Java and XML layouts.',
        'tags' => ['Java', 'Android Studio', 'XML'],
        'screenshots' => [
            [
                'image' => 'images/AndroidAppQuiz.jpg',
                'caption' => 'Quiz application GIF Screen. It shows the loading logo of the app.'
            ],
            [
                'image' => 'images/AndroidAppStart.jpg',
                'caption' => 'The interface of the Quiz App. It shows the start screen of the app with a button to start the quiz.'
            ],
            [
                'image' => 'images/AndroidAppScore.jpg',
                'caption' => 'It shows the score screen of the app.'
            ]
        ],
        'snippets' => [
            [
                'title' => 'Answer Checking and Score Calculation',
                'language' => 'java',
                'code' => <<<'JAVA'
                    String[] questions = {

                    "What does SDLC stand for?",

                    "What is the main purpose of requirements gathering?",

                    "Which activity is mainly performed to find defects in software?",

                    "Which Agile practice involves working in short, repeated development cycles?",

                    "What is software maintenance?"

                    };

                    String[][] choices = {

                    {
                            "Software Development Life Cycle",
                            "System Design Logic Control",
                            "Software Data Learning Cycle",
                            "System Development Level Code"
                    },

                    {
                            "To identify what the users and system need",
                            "To install the finished software",
                            "To remove bugs from the program",
                            "To design the computer hardware"
                    },

                    {
                            "Software testing",
                            "Requirements gathering",
                            "Deployment",
                            "Documentation"
                    },

                    {
                            "Iterative development",
                            "Hardware installation",
                            "Data encryption",
                            "File compression"
                    },

                    {
                            "Modifying software after it has been delivered",
                            "Creating a computer from hardware parts",
                            "Designing a network cable",
                            "Installing an operating system only"
                    }

                    };

                    String[] correctAnswers = {

                            "Software Development Life Cycle",

                            "To identify what the users and system need",

                            "Software testing",

                            "Iterative development",

                            "Modifying software after it has been delivered"

                    };
            JAVA,
              'explanation' => 'This code stores the quiz questions, four possible answer choices for each question, and the correct answers. It organizes the quiz data using one-dimensional and two-dimensional arrays, allowing the application to display each question with its corresponding choices and check the user’s selected answers.'
            ]
        ],   
    ],
    [
        'number' => '09',
        'category' => 'UI/UX DESIGN & MOBILE APP PROTOTYPING',
        'title' => 'BassLine',
        'description' => 'A Spotify-inspired music application prototype that allows users to listen to their favorite songs, sing along using a karaoke feature, and share music with other users.',
        'overview' => 'BassLine is a mobile application prototype created during my first year of college. Inspired by music streaming platforms like Spotify, the concept combines music listening, karaoke, and music sharing in one application. It aims to provide users with an interactive music experience where they can discover songs, sing along to their favorites, and share music with others.',
        'role' => 'Mobile application concept development, UI/UX design, and prototype creation.',
        'tags' => ['UI/UX Design', 'Mobile App Prototype', 'Music Streaming', 'Karaoke', 'Music Sharing'],
        'screenshots' => [
            [
                'image' => 'images/UiHome.png',
                'caption' => 'The home screen of the application, featuring the music discovery interface and recommended songs.'
            ],
            [
                'image' => 'images/UiMusicPlayer.png',
                'caption' => 'The music player interface, allowing users to listen to their selected songs.'
            ],
            [
                'image' => 'images/UiMusicSharing.png',
                'caption' => 'The music-sharing interface, where users can share their favorite songs with others.'
            ]
        ],
        'link' => 'https://www.figma.com/proto/M1SbEoivIGjgzhn93dducM/BASSLINE-Mobile?node-id=1-2&p=f&viewport=223%2C460%2C0.19&t=QTAPnsmO1NYngN0S-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=1%3A2&show-proto-sidebar=1&page-id=0%3A1'
    ]
];
