<?php 
?>

<form method="post" action="https://spindo.sendsmaily.net/api/opt-in/" name="oi_form">
    <input type="hidden" name="key" value="WiEb8i9A9myCi-Skqg0yuS0eeO86VqmYwZ6X-qFcbxE," /> <input type="hidden" name="autoresponder" value="11" /> <input id="country" type="hidden" name="country" value="Estonia" />
    <table cellspacing="0" cellpadding="0" width="412" border="0">
        <tbody>
            <tr>
                <td id="form_tl">
                <div id="form_tr">
                <div id="form_border">&#160;</div>
                </div>
                </td>
            </tr>
            <tr>
                <td id="form_border_1">
                <table id="form" cellspacing="2" cellpadding="2" border="0">
                    <tbody>
                        <tr>
                            <td valign="top" width="150" align="right">Имя</td>
                            <td><input name="firstname" type="text" /></td>
                        </tr>
                        <tr>
                            <td valign="top" width="150" align="right">Фамилия</td>
                            <td><input name="lastname" type="text" /></td>
                        </tr>
                        <tr>
                            <td valign="top" width="150" align="right">Мой e-mail адрес</td>
                            <td><input id="input_email" onkeyup="checkfields()" name="email" type="text" />
                            <div id="form_small_txt">Пожалуйста, удостоверьтесь, что написали адрес правильно</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="150" align="right">Мой телефон</td>
                            <td><input name="telephone" type="text" />
                            <div id="form_small_txt">Если введёте мобильный телефон, то получите возможность участвовать в SMS/MMS играх.</div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="bottom" width="150" align="right">Я живу в (или около)</td>
                            <td><select id="city" onchange="change_country()" name="city">
                            <option value="Tallinn" selected="selected">Tallinn</option>
                            <option value="Tartu">Tartu</option>
                            <option value="Narva">Narva</option>
                            <option value="Viljandi">Viljandi</option>
                            <option value="Rakvere">Rakvere</option>
                            <option value="Parnu">Pärnu</option>
                            <option value="Haapsalu">Haapsalu</option>
                            <option value="Voru">Võru</option>
                            <option value="Jogeva">Jõgeva</option>
                            <option value="Kuressaare">Kuressaare</option>
                            <option value="Ventspils">Ventspils</option>
                            <option value="Jurmala">Jurmala</option>
                            <option value="Jelgava">Jelgava</option>
                            <option value="Riga">Riga</option>
                            <option value="Liepaja">Liepāja</option>
                            <option value="Salaspils">Salaspils</option>
                            <option value="Ogre">Ogre</option>
                            <option value="Valmiera">Valmiera</option>
                            <option value="Aluksne">Aluksne</option>
                            <option value="Jekabpils">Jekabpils</option>
                            <option value="Daugavpils">Daugavpils</option>
                            <option value="Alytus">Alytus</option>
                            <option value="Anyksciai">Anyksciai</option>
                            <option value="Kaunas">Kaunas</option>
                            <option value="Klaipeda">Klaipeda</option>
                            <option value="Panevezys">Panevezys</option>
                            <option value="Siauliai">Siauliai</option>
                            <option value="Silute">Silute</option>
                            <option value="Telsiai">Telsiai</option>
                            <option value="Varena">Varena</option>
                            <option value="Vilnius">Vilnius</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td valign="bottom" width="150" align="right">Я родился</td>
                            <td><select id="day" name="birth_day">
                            <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            </select> <select id="month" name="birth_month">
                            <option value="Jan" selected="selected">Январь</option>
                            <option value="Feb">Февраль</option>
                            <option value="March">Март</option>
                            <option value="Apr">Апрель</option>
                            <option value="May">Май</option>
                            <option value="Jun">Июнь</option>
                            <option value="Jul">Июль</option>
                            <option value="Aug">Август</option>
                            <option value="Sept">Сентябрь</option>
                            <option value="Oct">Октябрь</option>
                            <option value="Nov">Ноябрь</option>
                            <option value="Dec">Декабрь</option>
                            </select> <select id="year" name="birth_year">
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988" selected="selected">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                            <option value="1946">1946</option>
                            <option value="1945">1945</option>
                            <option value="1944">1944</option>
                            <option value="1943">1943</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                            <option value="1938">1938</option>
                            <option value="1937">1937</option>
                            <option value="1936">1936</option>
                            <option value="1935">1935</option>
                            <option value="1934">1934</option>
                            <option value="1933">1933</option>
                            <option value="1932">1932</option>
                            <option value="1931">1931</option>
                            <option value="1930">1930</option>
                            <option value="1929">1929</option>
                            <option value="1928">1928</option>
                            <option value="1927">1927</option>
                            <option value="1926">1926</option>
                            <option value="1925">1925</option>
                            <option value="1924">1924</option>
                            <option value="1923">1923</option>
                            <option value="1922">1922</option>
                            <option value="1921">1921</option>
                            <option value="1920">1920</option>
                            <option value="1919">1919</option>
                            <option value="1918">1918</option>
                            <option value="1917">1917</option>
                            <option value="1916">1916</option>
                            <option value="1915">1915</option>
                            <option value="1914">1914</option>
                            <option value="1913">1913</option>
                            <option value="1912">1912</option>
                            <option value="1911">1911</option>
                            <option value="1910">1910</option>
                            <option value="1909">1909</option>
                            <option value="1908">1908</option>
                            <option value="1907">1907</option>
                            <option value="1906">1906</option>
                            <option value="1905">1905</option>
                            <option value="1904">1904</option>
                            <option value="1903">1903</option>
                            <option value="1902">1902</option>
                            <option value="1901">1901</option>
                            <option value="1900">1900</option>
                            <option value="1899">1899</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td valign="bottom" width="150" align="right">Пол</td>
                            <td>
                            <table cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td width="85"><input id="radio" type="radio" name="gender" value="man" /> мужской</td>
                                        <td><input id="radio" type="radio" name="gender" value="woman" /> женский</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>


                        <tr>
                            <td width="150">&#160;</td>
                            <td><input type="hidden" name="RULES" value="rules_not_accepted" /><input id="checkbox_rules" type="checkbox" onchange="checkfields()" name="RULES" value="rules_accepted" /> Я принимаю <a href="http://www.spindo.eu/pravila">правила Spindo Club</a> и хочу бесплатно стать членом клуба</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                            <div id="input_submit">&#160;</div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <div id="form_small_txt">Удостоверьтесь, что предоставленная Вами информация верна. Личность призеров будет проверяться, и информация должна совпадать.</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </td>
            </tr>
            <tr>
                <td id="form_bl">
                <div id="form_br">
                <div id="form_border_2">&#160;</div>
                </div>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="language" value="rus" /><input type="hidden" name="success_url" value="<?php echo site_url(); ?>/glavnaja/" />
</form>


<?php
?>