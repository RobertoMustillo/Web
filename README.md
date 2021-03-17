# Web

ISTITUTO TECNINCO COMMERCIALE “G. BOCCARDI”
TERMOLI
a.s. 2018-2019


SVILUPPO DI UN PROGETTO SOFTWARE
STUDIO DI UN CASO REALE
Gestione di un’agenzia di viaggi



Alunno: 	Roberto MUSTILLO	
Classe: 	5° A SIA 









Docenti:
Prof.ssa	Carmela TESTA
Prof	Oscar SCURTI

Gestione di un’agenzia di viaggi

Un'agenzia di viaggi intende organizzare in una base dati tutte le informazioni riguardanti la sua attività: i viaggi o vacanze, le organizzazioni turistiche o tour operator, i clienti dei propri servizi, le nazioni o località o città che sono destinazione dei viaggi/vacanze.
Tutte le attività proposte ai clienti sono dei pacchetti: ciascuno di essi si riferisce ad un'organizzazione turistica, e riguardano una precisa zona del mondo o nazione o città. Ci possono essere offerte di viaggi con la stessa destinazione da parte di organizzazioni diverse.
Di ogni pacchetto offerto occorre conoscere modalità e prezzi, di ogni località o nazione è opportuno tenere memorizzate informazioni sulle condizioni climatiche, moneta, ecc...
Un cliente può naturalmente acquistare in date diverse molti viaggi o vacanze.
Il committente della realizzazione del database intende estrarre le seguenti informazioni:
1 - elenco dei viaggi delle varie organizzazioni verso una determinata destinazione in un determinato periodo con relativo prezzo.
2 - elenco dei clienti che hanno prenotato un determinato viaggio ma non hanno ancora pagato.
3 - numero dei clienti per una determinata organizzazione in un dato anno.
4 - numero dei clienti per ogni organizzazione in un dato anno.
5 - nome dell'organizzazione che ha praticato il prezzo più basso in un viaggio di pari durata verso una data destinazione.
6 - incasso totale per una data organizzazione in un dato anno.
7 - incasso totale per ogni organizzazione in un dato anno. 
8 - elenco delle organizzazioni turistiche che hanno avuto più di 1000 clienti in un dato periodo.
9 - condizioni climatiche e moneta di una data nazione.


ANALISI DEL PROBLEMA
Analisi dei dati
Le entità che possono essere individuate nel problema sono:
* ORGANIZZAZIONE, per rappresentare le informazioni riguardanti le organizzazioni o agenzie;
* NAZIONE, per rappresentare le informazioni riguardanti le nazioni;
* CLIENTE, per rappresentare le informazioni riguardanti i clienti;
* PACCHETTO, per rappresentare le informazioni riguardanti i pacchetti;
* VIAGGIO, per rappresentare le informazioni riguardanti i viaggi;
Gli attributi di Organizzazione sono: codice dell’organizzazione, denominazione, telefono, e-mail, partita IVA, sede.
Gli attributi di Cliente sono: codice del cliente, cognome, nome, età, genere, codice fiscale, telefono, e-mail, indirizzo, città, provincia.
Gli attributi di Nazione sono: codice della nazione, denominazione, località, moneta, clima, info.
Gli attributi di Pacchetto sono: codice del pacchetto, titolo, andata, ritorno, trattamento, sistemazione, durata.
Gli attributi di Viaggio sono: codice del viaggio, prenotazione, data partenza, numero delle persone, prezzo, anticipo, data dell’anticipo, saldo, data del saldo, assicurazione.

Tra le entità Organizzazione e l’entità Pacchetto esiste un’associazione uno a molti, perché un’organizzazione può preparare uno o più pacchetti e ciascun pacchetto è preparato da una sola organizzazione.
Tra le entità Nazione e l’entità Pacchetto esiste un’associazione uno a molti, perché una nazione può appartenere ad uno o più pacchetti e ciascun pacchetto si riferisce a una sola nazione.
Tra le entità Pacchetto e l’entità Viaggio esiste un’associazione uno a molti, perché un pacchetto può organizzare uno o più viaggi e ciascun viaggio è organizzato da un solo pacchetto.
Tra le entità Cliente e l’entità Viaggio esiste un’associazione uno a molti, perché un Cliente può aderire ad uno o più Viaggi e ciascun Viaggio si riferisce a un solo Cliente.
Modello E/R









Tabelle
ORGANIZZAZIONI (IDorganizzazione, denominazione, telefono, mail, pIVA, sede)
NAZIONI (IDnazione, denominazione, localita, moneta, clima, info.)
CLIENTI (IDcliente, cognome, nome, eta, genere, codfiscale, telefono, mail, indirizzo, citta, provincia)
PACCHETTI (IDpacchetto, titolo, andata, ritorno, trattamento, sistemazione, durata, CODnazione, CODorganizzazione)
VIAGGI (IDviaggio, prenotazione, datapartenza, numpersone, prezzo, anticipo, dataanticipo, saldo, datasaldo, assicurazione, CODpacchetto, CODcliente)

Caratteristiche degli attributi delle tabelle
Create table:
Nazioni, Organizzazioni, Pacchetti





Viaggi

Clienti









Schema generale per l’uso della procedura gestionale creata:
Home Page







Area Riservata









Inserimento









Inserimento Cliente









Inserimento Viaggio








Registrazione










Home page del sito da cliente










Ricerca Dati










Mostra Nazioni








Interrogazioni





