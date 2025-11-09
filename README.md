# Gift Planner

Gift Planner è un'applicazione web per gestire regali, sviluppata in **Laravel 12** con **Tailwind CSS**.  
Permette di creare, visualizzare, modificare e cancellare regali assegnati agli utenti autenticati.

---

## Funzionalità

- Registrazione e login utenti (Breeze)
- CRUD completo sui regali:
  - Creazione di un regalo con destinatario, occasione, idea, budget, stato e note
  - Visualizzazione dettagli regalo
  - Modifica regalo
  - Eliminazione regalo con conferma
- Gestione dello stato del regalo (`da_comprare`, `acquistato`, `incartato`, `consegnato`)
- Layout responsive con Tailwind CSS
- Autorizzazioni tramite **Policy** (solo il proprietario può modificare o eliminare)

## Tecnologie
- PHP 8.4
- Laravel 12
- Tailwind CSS
- MySql
- Breeze (autenticazione)