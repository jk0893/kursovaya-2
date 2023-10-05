<?php include('../../views/layout/header.php'); ?>

<body>
    <section class="main-content">
            <div class="user-info">
                <div class="card-authreg-content">
                    <div class="card-authreg-content">

                        <div class="card-authreg-header">
                            <h1 class="card-authreg-title">Регистрация</h1>
                        </div>

                        <div class="card-authreg-body">
                            <form class="card-authreg-form" action="/authorization.php" method="POST">
                                <nav class="card-authreg-nav">
                                    <label for="second-name">
                                        Фамилия:
                                        <input type="text" name="second-name" required pattern="[A-Za-zА-Яа-яЁё]"
                                            min="5" max="25">
                                    </label>

                                    <label for="first-name">
                                        Имя:
                                        <input type="text" name="first-name" required pattern="[A-Za-zА-Яа-яЁё]" min="5"
                                            max="25">
                                    </label>

                                    <label for="father-name">
                                        Отчество:
                                        <input type="text" name="father-name" pattern="[A-Za-zА-Яа-яЁё]" min="5"
                                            max="25">
                                    </label>

                                    <label for="username">
                                        Логин:
                                        <input type="text" name="username" pattern="\w" required min="7">
                                        <!-- \w соответствует любой латинской букве, цифре и знаку препинания -->
                                    </label>

                                    <label for="password">
                                        Пароль:
                                        <input type="password" name="password" pattern="\w" required min="7">
                                    </label>

                                    <label for="password-confirm">
                                        Подтверждение пароля:
                                        <input type="password" name="password-confirm" pattern="\w" required min="7">
                                    </label>

                                    <label for="birth-date">
                                        Дата рождения:
                                        <input type="date" min="<?php echo date('Y-m-d H:i:s', strtotime("-3 day")); ?>"
                                            max="<?php echo date('Y-m-d'); ?>" required>
                                    </label>

                                    <label for="phone-number">
                                        Номер телефона:
                                        <input type="text" required
                                            pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                            min="11" max="12">
                                    </label>
                                    <button type="submit">Зарегистрироваться</button>
                                </nav>
                            </form>
                        </div>

                        <div class="card-authreg-footer">
                            <a href="authorization.php">Уже есть аккант? - Авторизуйтесь</a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </section>
</body>

<?php include('../../views/layout/footer.php'); ?>