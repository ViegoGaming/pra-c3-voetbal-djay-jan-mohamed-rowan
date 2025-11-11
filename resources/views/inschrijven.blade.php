<x-base-layout>
<section class="signupform-wrapper">
    <h2 class="ins">Inschrijven</h2>

    <form method="POST" action="#" class="signupform">
        @csrf

        <!-- Naam School -->
        <div class="signupform-group">
            <label for="school_naam">Naam School</label>
            <input 
                type="text" 
                name="school_naam" 
                id="school_naam" 
                class="signupform-control" 
                placeholder="Bijv. Het College van Breda"
                required
            >
        </div>

        <!-- Naam Coach -->
        <div class="signupform-group">
            <label for="coach_naam">Naam Coach</label>
            <input 
                type="text" 
                name="coach_naam" 
                id="coach_naam" 
                class="signupform-control" 
                placeholder="Bijv. Jan de Vries"
                required
            >
        </div>

        <!-- Emailadres School -->
        <div class="signupform-group">
            <label for="school_email">E-mailadres School</label>
            <input 
                type="email" 
                name="school_email" 
                id="school_email" 
                class="signupform-control" 
                placeholder="Bijv. info@school.nl"
                required
            >
        </div>

        <!-- Sport (Dropdown) -->
        <div class="signupform-group">
            <label for="sport">Sport</label>
            <select name="sport" id="sport" class="signupform-control" required>
                <option value="">-- Kies een sport --</option>
                <option value="voetbal">Voetbal</option>
                <option value="lijnbal">Lijnbal</option>
            </select>
        </div>

        <!-- Groep -->
        <div class="signupform-group">
            <label for="groep">Groep</label>
            <select name="groep" id="groep" class="signupform-control" required>
                <option value="">-- Kies een groep --</option>
                <option value="groep_1">Groep 1</option>
                <option value="groep_2">Groep 2</option>
                <option value="groep_3">Groep 3</option>
                <option value="groep_4">Groep 4</option>
            </select>
        </div>

        <!-- Submit -->
        <button type="submit" class="signupform-btn mt-3">Inschrijven</button>
    </form>
</section>
</x-base-layout>
