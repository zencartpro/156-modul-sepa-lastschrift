# 156-modul-sepa-lastschrift
SEPA Lastschrift für Zen Cart 1.5.6 deutsch

Hinweis: 
Freigegebene getestete Versionen für den Einsatz in Livesystemen ausschließlich unter Releases herunterladen:
https://github.com/zencartpro/156-modul-sepa-lastschrift/releases

Mit diesem Modul kann die Zahlungsart SEPA Lastschrift angeboten werden.

Features:

* Die aktuelle Liste der Bankleitzahlen/BICs aller deutschen Banken sind hinterlegt, so dass die Angaben geprüft werden und Banknamen automatisch ergänzt werden.
* Angabe der Gläubiger-Identifikationsnummer (CI), eines Präfixes für die Mandatsreferenz und eines Einziehungsdatums möglich, diese Angaben erscheinen dann im Bestellbestätigungsmail (Text und HTML) z.B. so:
    Den Rechnungsbetrag ziehen wir als SEPA-Lastschrift zum Fälligkeitstag 23.12.2019 mit unserer Gläubiger-ID CI123456 von Ihrem      angegebenen Konto DE12300703000001234567 ein.
    Bitte stellen Sie sicher, dass genügend Geld für die Zahlung auf dem Konto verfügbar ist.
    Ihre Mandatsreferenz: SHOP-14
    Als Mandatsreferenz wird die Bestellnummer mit optionalem Präfix verwendet.
* Zwei Zahlungsmodule aktivierbar, eines rein für Deutschland (BIC kein Pflichtfeld) und eines für andere europäische Länder, wo BIC und IBAN Pflichtfelder sind. Beim Modul für Deutschland kann optional auch mit Bankleitzahl und Kontonummer gearbeitet werden. Empfohlen ist aber der Modus IBAN only, so dass die Kunden rein IBAN und BIC angeben.
* Die Bankdaten für den Einzug sind bei der Bestellbearbeitung in der Administration ersichtlich.

