#!/usr/bin/python3.5

from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from pyvirtualdisplay import Display
from sys import exit
import time
import re
import pymysql.cursors
import sys



# MySql Credentionals 
mysql_host='127.0.0.1'
mysql_user=''
mysql_password=''
mysql_db=''

# Start virtual display
display = Display(visible=0, size=(1024, 768))
display.start()

# Initialization selenium driver

chrome_options = Options()
chrome_options.add_argument("--no-sandbox")
chrome_options.add_argument("--disable-setuid-sandbox")
driver = webdriver.Chrome("/home/roman/BorderProject/drivers/chromedriver", chrome_options=chrome_options)
driver.set_page_load_timeout(10)
driver.get("https://dpsu.gov.ua/ua/map")
time.sleep(2)
# Select proper filter on the map
driver.find_element_by_xpath('//*[@id="by_country"]/option[9]').click()
driver.find_element_by_xpath('//*[@id="by_type"]/option[2]').click()

# Page UP
time.sleep(2)
driver.execute_script("window.scrollBy(0,-250)", "")

# Double-click, size plus
el = driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[8]/img')
action = webdriver.common.action_chains.ActionChains(driver)
action.move_to_element_with_offset(el, -25, 5)
action.double_click()
time.sleep(2)
action.perform()


while True:
    #this is body code

    # Variable
    curtime = time.strftime('%Y-%m-%d %H:%M:%S')

    # Click in ech border icon
    # Yahodyn --->>> the same code on other border's
    # Page Up
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    # Click on Yahodyn icon
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[8]/img').click()
    time.sleep(5)
    # Get uptime
    yahodyn_uptime = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    # Get status on the border
    yahodyn_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')
    # Get speed status
    yahodyn_info_speed = re.findall('[0-9]+', yahodyn_info.text)
    print(yahodyn_info_speed[1])


    print(yahodyn_uptime.text + ' Yahodyn')
    print(yahodyn_info.text)
    yahodyn_info_queue = re.search('[0-9]+', yahodyn_info.text).group()
    print('Queue is ' + yahodyn_info_queue + '\n')
    time.sleep(5)
    # Page Up
    driver.execute_script("window.scrollBy(0,-250)", "")
    # Close modal window
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()

    yahodyn_uptime_text = yahodyn_uptime.text

    time.sleep(5)

    # Insert into MySql Yahodyn
    id = None

    year = yahodyn_uptime_text[6:10]
    month = yahodyn_uptime_text[3:5]
    date = yahodyn_uptime_text[0:2]
    hour = yahodyn_uptime_text[11:13]
    minute = yahodyn_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = yahodyn_info_queue
    speed = yahodyn_info_speed[1]
    border_title = 'Yahodyn'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
        # Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Yahodyn')

    # Zosin
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[2]/img').click()
    time.sleep(5)
    zosin_uptime = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    zosin_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')

    # Get speed status
    zosin_info_speed = re.findall('[0-9]+', zosin_info.text)
    print(zosin_info_speed[1])



    print(zosin_uptime.text + ' Zosin')
    print(zosin_info.text)
    zosin_info_queue = re.search('[0-9]+', zosin_info.text).group()
    print('Queue is ' + zosin_info_queue + '\n')
    driver.execute_script("window.scrollBy(0,-250)", "")
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()
    zosin_uptime_text = zosin_uptime.text

    time.sleep(5)

    # Insert into MySql Zosin

    year = zosin_uptime_text[6:10]
    month = zosin_uptime_text[3:5]
    date = zosin_uptime_text[0:2]
    hour = zosin_uptime_text[11:13]
    minute = zosin_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = zosin_info_queue
    speed = zosin_info_speed[1]
    border_title = 'Zosin'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
    
	# Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Zosin')

    # Uhryniv
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[1]/img').click()
    time.sleep(5)
    uhryniv_uptime = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    uhryniv_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')
    # Get speed status
    uhryniv_info_speed = re.findall('[0-9]+', uhryniv_info.text)
    print(uhryniv_info_speed[1])


    print(uhryniv_uptime.text + ' Uhryniv')
    print(uhryniv_info.text)
    uhryniv_info_queue = re.search('[0-9]+', uhryniv_info.text).group()
    print('Queue is ' + uhryniv_info_queue + '\n')
    driver.execute_script("window.scrollBy(0,-250)", "")
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()
    uhryniv_uptime_text = uhryniv_uptime.text
    time.sleep(5)

    # Insert into MySql Uhryniv

    year = uhryniv_uptime_text[6:10]
    month = uhryniv_uptime_text[3:5]
    date = uhryniv_uptime_text[0:2]
    hour = uhryniv_uptime_text[11:13]
    minute = uhryniv_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = uhryniv_info_queue
    speed = uhryniv_info_speed[1]
    border_title = 'Uhryniv'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
    # Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Uhryniv')



    # Rava-Ruska
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[4]/img').click()
    time.sleep(5)
    ravaruska_uptime = driver.find_element_by_xpath(
        '/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    ravaruska_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')

    # Get speed status
    ravaruska_info_speed = re.findall('[0-9]+', ravaruska_info.text)
    print(ravaruska_info_speed[1])


    print(ravaruska_uptime.text + ' Rava Ruska')
    print(ravaruska_info.text)
    ravaruska_info_queue = re.search('[0-9]+', ravaruska_info.text).group()
    print('Queue is ' + ravaruska_info_queue + '\n')
    driver.execute_script("window.scrollBy(0,-250)", "")
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()
    ravaruska_uptime_text = ravaruska_uptime.text
    time.sleep(5)

    # Insert into MySql Uhryniv

    year = ravaruska_uptime_text[6:10]
    month = ravaruska_uptime_text[3:5]
    date = ravaruska_uptime_text[0:2]
    hour = ravaruska_uptime_text[11:13]
    minute = ravaruska_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = ravaruska_info_queue
    speed = ravaruska_info_speed[1]
    border_title = 'Ravaruska'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
	# Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Ravaruska')



    # Hrushiv
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[3]/img').click()
    time.sleep(5)
    hrushiv_uptime = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    hrushiv_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')

    # Get speed status
    hrushiv_info_speed = re.findall('[0-9]+', hrushiv_info.text)
    print(hrushiv_info_speed[1])


    print(hrushiv_uptime.text + ' Hrushiv')
    print(hrushiv_info.text)
    hrushiv_info_queue = re.search('[0-9]+', hrushiv_info.text).group()
    print('Queue is ' + hrushiv_info_queue + '\n')
    driver.execute_script("window.scrollBy(0,-250)", "")
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()
    hrushiv_uptime_text = hrushiv_uptime.text
    time.sleep(5)

    # Insert into MySql Hrushiv

    year = hrushiv_uptime_text[6:10]
    month = hrushiv_uptime_text[3:5]
    date = hrushiv_uptime_text[0:2]
    hour = hrushiv_uptime_text[11:13]
    minute = hrushiv_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = hrushiv_info_queue
    speed = hrushiv_info_speed[1]
    border_title = 'Hrushiv'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
	# Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Hrushiv')





    # Krakivets
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[5]/img').click()
    time.sleep(5)
    krakivets_uptime = driver.find_element_by_xpath(
        '/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    krakivets_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')
    # Get speed status
    krakivets_info_speed = re.findall('[0-9]+', krakivets_info.text)
    print(krakivets_info_speed[1])



    print(krakivets_uptime.text + ' Krakivets')
    print(krakivets_info.text)
    krakivets_info_queue = re.search('[0-9]+', krakivets_info.text).group()
    print('Queue is ' + krakivets_info_queue + '\n')
    driver.execute_script("window.scrollBy(0,-250)", "")
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()
    krakivets_uptime_text = krakivets_uptime.text
    time.sleep(5)

    # Insert into MySql Krakivets

    year = krakivets_uptime_text[6:10]
    month = krakivets_uptime_text[3:5]
    date = krakivets_uptime_text[0:2]
    hour = krakivets_uptime_text[11:13]
    minute = krakivets_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = krakivets_info_queue
    speed = krakivets_info_speed[1]
    border_title = 'Krakivets'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
	# Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)    

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Krakivets')




    # Shegyni
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[6]/img').click()
    time.sleep(5)
    shegyni_uptime = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    shegyni_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')

    # Get speed status
    shegyni_info_speed = re.findall('[0-9]+', shegyni_info.text)
    print(shegyni_info_speed[1])


    print(shegyni_uptime.text + ' Shegyni')
    print(shegyni_info.text)
    shegyni_info_queue = re.search('[0-9]+', shegyni_info.text).group()
    print('Queue is ' + shegyni_info_queue + '\n')
    driver.execute_script("window.scrollBy(0,-250)", "")
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()
    shegyni_uptime_text = shegyni_uptime.text
    time.sleep(5)

    # Insert into MySql Shegyni

    year = shegyni_uptime_text[6:10]
    month = shegyni_uptime_text[3:5]
    date = shegyni_uptime_text[0:2]
    hour = shegyni_uptime_text[11:13]
    minute = shegyni_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = shegyni_info_queue
    speed = shegyni_info_speed[1]
    border_title = 'Shegyni'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
	# Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)    

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Shegyni')




    # Smilnytsia
    driver.execute_script("window.scrollBy(0,-250)", "")
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="gmap"]/div/div/div[1]/div[3]/div/div[1]/div[7]/img').click()
    time.sleep(5)
    smilnytsia_uptime = driver.find_element_by_xpath(
        '/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[1]/div[2]')
    smilnytsia_info = driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[2]/div[2]/div[6]/div[2]')

    # Get speed status
    smilnytsia_info_speed = re.findall('[0-9]+', smilnytsia_info.text)
    print(smilnytsia_info_speed[1])

    print(smilnytsia_uptime.text + ' Smilnytsia')
    print(smilnytsia_info.text)
    smilnytsia_info_queue = re.search('[0-9]+', smilnytsia_info.text).group()
    print('Queue is ' + smilnytsia_info_queue + '\n')
    driver.execute_script("window.scrollBy(0,-250)", "")
    driver.find_element_by_xpath('/html/body/div[7]/div[3]/div[1]/div[3]/div/div[1]').click()
    smilnytsia_uptime_text=smilnytsia_uptime.text
    time.sleep(5)

    # Insert into MySql Smilnytsia

    year = smilnytsia_uptime_text[6:10]
    month = smilnytsia_uptime_text[3:5]
    date = smilnytsia_uptime_text[0:2]
    hour = smilnytsia_uptime_text[11:13]
    minute = smilnytsia_uptime_text[14:16]
    second = '00'

    site_update_mysql_format = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second
    queue_before_border = smilnytsia_info_queue
    speed = smilnytsia_info_speed[1]
    border_title = 'Smilnytsia'

    print(id)
    print(site_update_mysql_format)
    print(type(queue_before_border))
    print(speed)
    print(border_title)

    try:
    # Connect to the database
        connection = pymysql.connect(host=mysql_host,
                                     user=mysql_user,
                                     password=mysql_password,
                                     db=mysql_db,
                                     charset='utf8mb4',
                                     cursorclass=pymysql.cursors.DictCursor)

        with connection.cursor() as cursor:

            sqlinsert = "INSERT INTO border VALUES (%s,%s,%s,%s,%s,%s)"
            cursor.execute(sqlinsert, (id, site_update_mysql_format, queue_before_border, speed, border_title, curtime))
            connection.commit()


    finally:
        connection.close()

    # End insert into MySql
    print('Successfully added to MySQL Smilnytsia')


    # Sleep before starting new loop

    for i in range(900, 0, -1):
        sys.stdout.write(str(i) + ' ')
        sys.stdout.flush()
        time.sleep(1)


# Quit Selenium driver
driver.quit()

# Stop virtual display
display.stop()

