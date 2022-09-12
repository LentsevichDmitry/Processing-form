<?php
echo<<<_HTML_
<form action="verification.php" method="post">
    <table border="1">
        <caption>Адрес отправителя</caption>
        <tr>
            <td>Область</td>
            <th>
                <select name="region1">
                    <option value="Брестская">Брестская</option>
                    <option value="Минская">Минская</option>
                    <option value="Гродненская">Гродненская</option>
                    <option value="Витебская">Витебская</option>
                    <option value="Гомельская">Гомельская</option>
                    <option value="Могилевская">Могилевская</option>
                </select>
            </th>
        </tr>
        <tr>
            <td>Почтовый индекс</td>
            <th><input type="text" name="post1"></th>
        </tr>
        <tr>
            <td>Город</td>
            <th><input type="text" name="city1"></th>
        </tr>
    </table>
    <br>
    <table border="1">
        <caption>Адрес Получателя</caption>
        <tr>
            <td>Область</td>
            <th>
                <select name="region2">
                    <option value="Брестская">Брестская</option>
                    <option value="Минская">Минская</option>
                    <option value="Гродненская">Гродненская</option>
                    <option value="Витебская">Витебская</option>
                    <option value="Гомельская">Гомельская</option>
                    <option value="Могилевская">Могилевская</option>
                </select>
            </th>
        </tr>
        <tr>
            <td>Почтовый индекс</td>
            <th><input type="text" name="post2"></th>
        </tr>
        <tr>
            <td>Город</td>
            <th><input type="text" name="city2"></th>
        </tr>
    </table>
    <label for="size">Размер посылки (см)</label><br>
    <input type="text" name="size"><br>
    <label for="weigh">Вес посылки (кг)</label><br>
    <input type="text" name="weigh"><br>
    <input type="submit" value="Submit"><br>
</form>
<a href="index.php"></a>
_HTML_;
