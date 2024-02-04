# Binary Search Algoritmi

1 dan 100 gacha bo'lgan sonlardan, birorta o'ylagan sonni topish vazifa berilsa, va har safar sonni tahmin qilganingizda songa yaqinlashdingizmi yoki yuqorilab ketganingizni aytib tursam, qaysi usuldan foydalanib o'ylagan sonimni topib berasiz?

Har bitta sonni etib chiqasizmi?
**1 - yaqinlashdingiz**
**2 - yaqinlashdingiz**
...
Bu sikl toki to'g'ri degunimcha davom etadi. Agar o'ylagan sonim 77 bo'lsa, siz 77 marta sonni tahmin qilasiz. Qiyin-a? Endi tasavvur qilish, sonlar 1,000,000 bo'lsachi?

Keling, bugun oddiy search qilishni to'xtamiz. O'rniga yaxshiroq qidirish algoritmini ko'rib chiqamiz.

## Binary Search
Binary search algoritmi orqali, ma'lum sonlar orasidan tahmin qilishingiz imkonini yaratasiz. Yuqoridagi misolga to'xtalsak. 1 dan 100 gacha bo'lgan sonlarni o'ylagan sonimni topaylik.

Tahmin qilishni sonlarnin o'rtasidan boshlaymiz:
**50 - yaqinlashdingiz** demak, o'ylagan son 50 dan yuqori. Endi bizda 1 dan 50 gacha bo'lgan sonlarni tekshirishimiz shart emas. Endi 51 dan 100 gacha bo'lgan sonlar orasidan tahmin qilishimiz mumkin.
**75 - yaqinlashdingiz** demak, o'ylangan son 75 dan ham yuqori ekan. Endi 75 gacha bo'lgan sonlarni tekshirishimiz shart emas. Undan yuqoridagi sonlardan tahmin qilamiz. 76-100
**88 - yuqorilab ketdingiz** demak, o'ylangan son 76 va 88 sonlari orasida.
**82 - yuqorilab ketdingiz** demak, o'ylangan son 76 va 82 sonlari orasida.
**79 - yuqorilab ketdingiz** demak, o'ylangan son 76 va 79 sonlari orasida.
**77 - topdingiz**

Uraaa, topdik. Farqni sezdingizmi? Oddiy qidirish algortimi orqali 77 sonini, 77-chi marta so'raganimizda topdik. Binary Search algoritmi orqali 6 ta urinishda o'ylangan sonni topdik. 12 karra yaxshiroq natija.

Endi tasavvur qilyapsizmi, bu birgina 1 va 100 sonlari orasidan qidiruv edi. Agar ma'lumotlarimiz millionlagan bo'lsa-chi?

### Binary Search haqida
Binary Search algoritmi faqatgina tartiblangan ma'lumotlar bilan ishlay oladi. Shundan ma'lumotlar orasidan qidirmoqchi bo'lsangiz ushbu algoritmdan foydalanish optimal variant hisoblanadi.

Binary Search algoritmi ma'lumotlarni O(log2n) notatsiyasida topib beradi. Bu oddiy search algoritmiga (O(n)) qaraganda ancha yaxshiroq.

> Agar logarifm haqida bilmasangiz uchun [videoni](https://www.khanacademy.org/math/algebra2/x2ec2f6f830c9fb89:logs/x2ec2f6f830c9fb89:log-intro/v/logarithms) tamosha qiling.

Binary Search bilan Oddiy Searchni solib ko'rishingiz uchun ikkita faylni yaratib qo'ydik. Ularni run qilish bilan natijani solishtirishiniz mumkin.
