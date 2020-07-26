# Informatsiya

![PHP](https://img.shields.io/badge/php-%3E%3D7.0-8892bf.svg)
![CURL](https://img.shields.io/badge/cURL-required-green.svg)

O'zim yozgan telegram bot uchun Framework. Ishlashni osonlashtiradi. Kod yozish tezlashadi. Ancha funktsiyalarini example kodda ishlatmadim. Aqliz yetsa ishlata olasiz, bor kuchida ishlatilsa zo'r ishlarni oson qilsa bo'ladi. Ba'zi joylari dehqoncha yozilgan.  i18 ishlatilgan ya'ni bemalol bir nechta tilni ishlata olasiz. Optimizatsiya. User step qo'yishga va step olishga imkoniyat yengil. Knopka qo'shish imkoni zo'r.

-------

# Yuklab olish va o'rnatish
### Git orqali yuklab olish
```https://github.com/sheykhri/sheykhri.git```
### Zip fayl ko'rinishida yuklab olish
```https://github.com/sheykhri/sheykhri/archive/master.zip```

-------

## Ishlatish bo'yicha qo'llanma.
[Til qo'llanmasi](#til)

[Xabar yuborish](#xabar-yuborish)

-------
### **Til**
```$language = new i18n();```

Tilni ishga tushuramiz.

```$language->setPrefix('T');```

Tilni **T** deb belgilab olamiz, belgilanmasa standart holatda **L** deb qabul qilinadi. Ishlatish paytida bizga kerak bo'ladi.

```$language->setFallbackLang('uz');```

lang_uz.ini faylini yuklaydi.

```$language->setFallbackLang('ru');```

lang_ru.ini faylini yuklaydi.

```$language->init();```

Tilni ishga tushurish, barcha tilni sozlash amalidan keyin tilni ishga tushurish shart.

-------
### **Xabar yuborish**
```$api->sendMessage(['text' => T::start, 'parse_mode' => 'HTML']);```

sendMessage orqali **T::start**, ya'ni tanlangan til faylidan **start="Salom"** deyilgan joyni, HTML xolatida yuboramiz.
