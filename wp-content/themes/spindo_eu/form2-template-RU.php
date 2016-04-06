<?php 
?>

<table width="545" cellpadding="0" cellspacing="0" border="0" id="global_forms">
<tr>
<td id="form_tl"><div id="form_tr">
<div id="form_border">&nbsp;</div>
</div></td>
</tr>
<tr>
<td id="form_border_1"><table width="545" border="0" cellspacing="0" cellpadding="0" id="form2">
<tr>
<td><form class="container" action="https://spindo.sendsmaily.net/api/import/" method="post">
<input type="hidden" name="key" value="WiEb8i9A9myCi-Skqg0yuS0eeO86VqmYwZ6X-qFcbxE," />
<input type='hidden' name='0[email]' value="<?php echo $_COOKIE["__spindo_email"]; ?>" />
<input type="hidden" value="<?php echo site_url(); ?>/spasibo-cto-prisoedinilis-k-spindo-club/" name="success_url" />
<table width="100%" border="0" cellspacing="1" cellpadding="1">
<tr>
<td><table width="100%" border="0" cellspacing="1" cellpadding="1">
                        <tr>
                            <td valign="bottom" width="150" align="right">Я вожу машину</td>
                            <td>
                            <table cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td width="85"><input id="radio2" type="radio" name="drivers_license" value="driver_yes" /> Да</td>
                                        <td><input id="radio2" type="radio" name="drivers_license" value="driver_no" /> Нет</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td valign="bottom" width="150" align="right">Моя сфера деятельности</td>
                            <td><select id="job_area" name="job_area">
                            <option value="-" selected="selected">-- выбери --</option>
                            <option value="agriculture_forestry_fishing">Сельское хозяйство</option>
                            <option value="assisting_administration">Административная работа</option>
                            <option value="catering">Питание</option>
                            <option value="commerce_economics">Торговля / Экономика</option>
                            <option value="contruction_real_estate">Строительство / Недвижимость</option>
                            <option value="culture_arts_recreation">Культура / Искусство / Досуг</option>
                            <option value="customer_service">Обслуживание</option>
                            <option value="education_science_telecommunication">Образование / Наука</option>
                            <option value="electronics_telecommunication">Электроника / Телекоммуникации</option>
                            <option value="energetics_natural_resources">Энергетика / Природные ресурсы</option>
                            <option value="finance">Финансы</option>
                            <option value="health_care_pharmacy">Здравоохранение / Фармацевтика</option>
                            <option value="human_resources_training">Персонал / Обучение</option>
                            <option value="information_media">Информация / Mасс-медиа</option>
                            <option value="information_technology_e-commerce">ИТ / Электронная коммерция</option>
                            <option value="law_jurisprudence_security">Юриспруденция / Охрана</option>
                            <option value="management">Управление</option>
                            <option value="manufacturing_production">Промышленность / Производство</option>
                            <option value="marketing_advertising">Маркетинг / Реклама / PR</option>
                            <option value="mechanics_engineering">Механика / Техника</option>
                            <option value="public_governmental_service">Государственное управление</option>
                            <option value="sales_retail">Продажа</option>
                            <option value="tourism_hotels">Туризм / Гостиничное дело</option>
                            <option value="transportation_logistics">Транспорт / Логистика</option>
                            </select></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td valign="bottom" width="150" align="right">Моя квалификация</td>
                            <td><select id="job_level" name="job_level">
                            <option value="-" selected="selected">-- выбери --</option>
                            <option value="top_executive">руководитель высшего звена</option>
                            <option value="middle_manager">руководитель среднего звена</option>
                            <option value="specialist">специалист</option>
                            <option value="skilled_worker">квалифицированный работник</option>
                            <option value="civil_servant">чиновник</option>
                            <option value="general_worker">разнорабочий</option>
                            </select></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td valign="bottom" width="150" align="right">Мое рабочее время</td>
                            <td><select id="job_time" name="job_time">
                            <option value="-" selected="selected">-- выбери --</option>
                            <option value="full_time">полная ставка</option>
                            <option value="part_time">неполная ставка</option>
                            <option value="between_jobs">несколько рабочих мест</option>
                            <option value="student">студент</option>
                            </select></td>
                            <td></td>
                            <td></td>
                        </tr>

<tr>
<td width="355">&nbsp;</td>
<td width="44" align="center">Люблю</td>
<td width="44" align="center">Средне</td>
<td width="82" align="center">Не люблю</td>
</tr>
</table></td>
</tr>
<tr>
<td><fieldset class="fieldset">
<legend>Спорт и отдых</legend>
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="fields">
<tr>
<td width="355" bgcolor="#eeffcf">Все виды спорта</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[all_sports]" value="all_sports_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[all_sports]" value="all_sports_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[all_sports]" value="all_sports_no" /></td>
</tr>
<tr>
<td width="355">Футбол</td>
<td width="44" align="center"><input type="radio" name="0[football]" value="football_love" /></td>
<td width="44" align="center"><input type="radio" name="0[football]" value="football_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[football]" value="football_no" /></td>
</tr>
<tr>
<td width="355">Баскетбол</td>
<td width="44" align="center"><input type="radio" name="0[basketball]" value="basketball_love" /></td>
<td width="44" align="center"><input type="radio" name="0[basketball]" value="basketball_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[basketball]" value="basketball_no" /></td>
</tr>
<tr>
<td width="355">Зимние виды спорта</td>
<td width="44" align="center"><input type="radio" name="0[winter_sports]" value="winter_sports_love" /></td>
<td width="44" align="center"><input type="radio" name="0[winter_sports]" value="winter_sports_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[winter_sports]" value="winter_sports_no" /></td>
</tr>
<tr>
<td width="355" bgcolor="#eeffcf">Автоспорт</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[motor_sports]" value="motor_sports_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[motor_sports]" value="motor_sports_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[motor_sports]" value="motor_sports_no" /></td>
</tr>
<tr>
<td width="355">Командные виды спорта</td>
<td width="44" align="center"><input type="radio" name="0[team_sports]" value="team_sports_love" /></td>
<td width="44" align="center"><input type="radio" name="0[team_sports]" value="team_sports_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[team_sports]" value="team_sports_no" /></td>
</tr>
</table>
</fieldset></td>
</tr>
<tr>
<td><fieldset class="fieldset">
<legend>Развлечения</legend>
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="fields">
<tr>
<td width="355" bgcolor="#eeffcf">Мероприятия и концерты</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[events]" value="events_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[events]" value="events_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[events]" value="events_no" /></td>
</tr>
<tr>
<td width="355">Онлайн-игры и азартные игры</td>
<td width="44" align="center"><input type="radio" name="0[games]" value="games_love" /></td>
<td width="44" align="center"><input type="radio" name="0[games]" value="games_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[games]" value="games_no" /></td>
</tr>
<tr>
<td width="355" bgcolor="#eeffcf">TV</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[tv]" value="tv_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[tv]" value="tv_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[tv]" value="tv_no" /></td>
</tr>
<tr>
<td width="355">Музыка</td>
<td width="44" align="center"><input type="radio" name="0[music]" value="music_love" /></td>
<td width="44" align="center"><input type="radio" name="0[music]" value="music_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[music]" value="music_no" /></td>
</tr>
</table>
</fieldset></td>
</tr>
<tr>
<td><fieldset class="fieldset">
<legend>Магазины и услуги</legend>
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="fields">
<tr>
<td width="355" bgcolor="#eeffcf">Мода</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[fashion]" value="fashion_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[fashion]" value="fashion_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[fashion]" value="fashion_no" /></td>
</tr>
<tr>
<td width="355">Книги и журналы</td>
<td width="44" align="center"><input type="radio" name="0[books]" value="books_love" /></td>
<td width="44" align="center"><input type="radio" name="0[books]" value="books_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[books]" value="books_no" /></td>
</tr>
<tr>
<td width="355" bgcolor="#eeffcf">Семья и дом</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[home]" value="home_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[home]" value="home_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[home]" value="home_no" /></td>
</tr>
<tr>
<td width="355">Телефоны, камеры и гаджеты</td>
<td width="44" align="center"><input type="radio" name="0[gadgets]" value="gadgets_love" /></td>
<td width="44" align="center"><input type="radio" name="0[gadgets]" value="gadgets_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[gadgets]" value="gadgets_no" /></td>
</tr>
<tr>
<td width="355" bgcolor="#eeffcf">Компьютеры и софт</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[computers]" value="computers_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[computers]" value="computers_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[computers]" value="computers_no" /></td>
</tr>
</table>
</fieldset></td>
</tr>
<tr>
<td><fieldset class="fieldset">
<legend>Бизнес и финансы</legend>
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="fields">
<tr>
<td width="355" bgcolor="#eeffcf">Бизнес-услуги</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[b2b]" value="b2b_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[b2b]" value="b2b_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[b2b]" value="b2b_no" /></td>
</tr>
<tr>
<td width="355">Финансовые услуги</td>
<td width="44" align="center"><input type="radio" name="0[finance]" value="finance_love" /></td>
<td width="44" align="center"><input type="radio" name="0[finance]" value="finance_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[finance]" value="finance_no" /></td>
</tr>
<tr>
<td width="355" bgcolor="#eeffcf">Недвижимость</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[real_estate]" value="real_estate_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[real_estate]" value="real_estate_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[real_estate]" value="real_estate_no" /></td>
</tr>
<tr>
<td width="355">Банковское дело и страхование</td>
<td width="44" align="center"><input type="radio" name="0[banking]" value="banking_love" /></td>
<td width="44" align="center"><input type="radio" name="0[banking]" value="banking_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[banking]" value="banking_no" /></td>
</tr>
<tr>
<td width="355" bgcolor="#eeffcf">Биржи и акции</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[stocks]" value="stocks_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[stocks]" value="stocks_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[stocks]" value="stocks_no" /></td>
</tr>
<tr>
<td width="355">Командировки</td>
<td width="44" align="center"><input type="radio" name="0[business_travel]" value="business_travel_love" /></td>
<td width="44" align="center"><input type="radio" name="0[business_travel]" value="business_travel_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[business_travel]" value="business_travel_no" /></td>
</tr>
</table>
</fieldset></td>
</tr>
<tr>
<td><fieldset class="fieldset">
<legend>Здоровье и отпуск</legend>
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="fields">
<tr>
<td width="355" bgcolor="#eeffcf">Зарубежные путешествия</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[holidays_abroad]" value="holidays_abroad_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[holidays_abroad]" value="holidays_abroad_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[holidays_abroad]" value="holidays_abroad_no" /></td>
</tr>
<tr>
<td width="355">Фитнес</td>
<td width="44" align="center"><input type="radio" name="0[fitness]" value="fitness_love" /></td>
<td width="44" align="center"><input type="radio" name="0[fitness]" value="fitness_ok" checked="checked" /></td>
<td width="82" align="center"><input type="radio" name="0[fitness]" value="fitness_no" /></td>
</tr>
<tr>
<td width="355" bgcolor="#eeffcf">Здоровый образ жизни</td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[health]" value="health_love" /></td>
<td width="44" align="center" bgcolor="#eeffcf"><input type="radio" name="0[health]" value="health_ok" checked="checked" /></td>
<td width="82" align="center" bgcolor="#eeffcf"><input type="radio" name="0[health]" value="health_no" /></td>
</tr>
</table>
</fieldset></td>
</tr>
<tr>
<td colspan="4" align="center"><br />
Если это все, жмите Готово и Вы станете полноправным членом Spindo Club. Добро пожаловать :)<br />
<br />
<input type="image" src="<?php bloginfo('template_url'); ?>/images/btn_ru_join2.jpg" alt="Готово" width="169" height="45" /></td>
</tr>
</table>
<input type='hidden' name='data[pid]' value="{$smarty.get.pid}">
<input type='hidden' name='data[aid]' value="{$smarty.get.aid}">
</form></td>
</tr>
</table></td>
</tr>
<tr>
<td id="form_bl"><div id="form_br">
<div id="form_border_2">&nbsp;</div>
</div></td>
</tr>
</table> 

<?php
?>