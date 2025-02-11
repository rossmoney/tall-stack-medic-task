# Take Home Task

Thank you for your interest in the role of **Junior Developer** 😃. The successful candidate will initially be working on a complex medical application built using the **TALL** stack:

- [Tailwind CSS](https://tailwindcss.com/)
- [Alpine.js](https://alpinejs.dev/)
- [Laravel](https://laravel.com/)
- [Livewire](https://laravel-livewire.com/)

It is important you are familiar with these technologies.

## Table of Contents
1. [Project Setup](#project-setup)
2. [Task 1](#task-1)
3. [Task 2](#task-2)
4. [Task 3](#task-3)
5. [Submitting Your Work](#submitting-your-work)

---

## Project Setup

For this task you will be working on a very simple pre-hospital electronic patient record application built with Laravel. We’d like you to complete the task in your local development environment.

All you should need to do to get up and running is:
1. clone the repo
2. install the composer dependencies
3. copy the ```.env.example```
4. set a new key
5. migrate and seed
   
> **Note:** To simplify installation we have included the `public/build` directory. You can rebuild the compiled assets if you wish, but it is not required to complete the tasks.

---

## Task 1

The customer likes the patient page, but we forgot to include a **patient examination** 🤦. They would like an examination panel and have given us the instructions below. They also mentioned some specific data requirements that make us think we should add this as a separate model with a **one-to-one** relationship to the patient.

Can you please build a panel based on these requirements? 😊

- **Airway** (options: *Maintaining Own, Partial Obstruction, Complete Obstruction, Managed*)
- **Breathing** (options: *Good AE bilaterally, Poor AE right, Poor AE left, Poor AE bases, Apnoeic, Ventilated*)
- **Circulation** (options: *Radial pulse, Femoral pulse, Carotid pulse, Cardiac arrest*)
- **[Adult Glasgow Coma Scale](https://en.wikipedia.org/wiki/Glasgow_Coma_Scale)**
- **Entrapment** (yes/no)
- **Secondary Survey** (free text)



## Task 2

We’ve had reports of **usability issues** 👿. Could you please write a **dusk test** for the examination panel you created? 🙏



## Task 3

On the **job timings panel**, there should be some cards that calculate the time intervals for various points in the job cycle. Unfortunately, we completely forgot to add any code to make them work 👎.

Could you have a look at the file `job-timings.blade.php` and see if you can get the four components on **lines 56–59** working? 💪

The times that should be displayed are:

- **Dispatch**: interval between `time_999` and `time_hems`
- **Launch**: interval between `time_hems` and `time_lift`
- **Scene**: interval between `time_scene` and `time_depart`
- **Transit**: interval between `time_depart` and `time_hospital`

