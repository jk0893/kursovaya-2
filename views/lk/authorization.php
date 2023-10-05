<?php include('../../views/layout/header.php'); ?>

<body>
    <section class="main-content">
            <div class="user-info">
                <div class="card-authreg-content">
                    <div class="card-authreg-content">

                        <div class="card-authreg-header">
                            <h1 class="card-authreg-title">Авторизация</h1>
                        </div>

                        <div class="card-authreg-body">
                            <form class="card-authreg-form" action="/lk-index.php" method="POST">
                                <nav class="card-authreg-nav">
                                    <label for="username">
                                        Логин:
                                        <input type="text" name="username" id="username" required pattern="\w" min="5"
                                            max="30"
                                            oninput="setCustomValidity('Логин должен содержать латинские буквы, цифры и символы, их дожно быть не менее 5 символов и не более 30-ти.')">
                                    </label>
                                    <label for="password">
                                        Пароль:
                                        <input type="text" name="password" id="password" required pattern="\w" min="5"
                                            max="30"
                                            oninput="setCustomValidity('Пароль должен содержать латинские буквы, цифры и символы, их дожно быть не менее 5 символов и не более 30-ти.')">
                                    </label>
                                    <button class="subtext button" type="submit">Авторизоваться</button>
                                </nav>
                            </form>
                        </div>

                        <div class="card-authreg-footer">
                            <a href="../../views/lk/registration.php">Нет аккаунта? - Зарегистрируйтесь</a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </section>
</body>

<?php include('../../views/layout/footer.php'); ?>