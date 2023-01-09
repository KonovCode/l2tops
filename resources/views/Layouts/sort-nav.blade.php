<div id="sort_nav" class="bg-gray-800 py-2 opacity-90 mb-3 flex justify-evenly md:justify-between px-2 md:px-3 items-center">
        
        <section class="md:block hidden w-4/12">
            <h2 class="text-center text-white text-xl font-bold">Анонсы серверов</h2>
        </section>

        <form method="GET" class="sm:w-full md:w-11/12 lg:w-5/12 flex justify-evenly items-center">
            <label class="text-white text-xs sm:text-sm md:text-lg mx-auto" for="rates">Рейты
            <select class="h-8 text-xs text-black rounded" name="rates" id="rates" style="min-width: 80px">
                <option value="">Любые</option>
                <option value="1,10">x1 - x10</option>
                <option value="10,50">x10 - x50</option>
                <option value="50,100">x50 - x100</option>
                <option value="100,1000">x100 - x1000</option>
                <option value="1000,2000">x1000 - x2000</option>
                <option value="2000,10000">x2000 - x10000</option>
                <option value="10000,999999">x10000 - x999999</option>

            </select>
             </label>

             <!-- <div class="flex flex-wrap"> -->

             <label class="text-white text-xs sm:text-sm md:text-lg mx-auto" for="chronicles">
                Хроники
                <select class="text-xs text-black rounded h-8" name="chronicles" id="chronicles" style="min-width: 90px">
                    <option value="">Любые хроники</option>
                    <option value="interlude">Interlude</option>
                    <option value="high five">High Five</option>
                    <option value="interlude+">Interlude+</option>
                    <option value="essence">Essence</option>
                    <option value="epilogue">Epilogue</option>
                    <option value="god">GoD</option>
                    <option value="freya">Freya</option>
                    <option value="classic">Classic</option>
                    <option value="lindvior">Lindvior</option>
                    <option value="gracia">Gracia</option>
                    <option value="orfen">Orfen</option>
                    <option value="helios">Helios</option>
                    <option value="fafurion">Fafurion</option>
                    <option value="etheia">Etheia</option>
                    <option value="odyssey">Gracia</option>
                </select>
             </label>

             <button type="submit" class="bg-blue-500 text-xs sm:text-sm md:text-lg px-1 md:px-3 py-2 md:py-0 ml-1 md:h-9 md:ml-0 text-white rounded mx-auto">Подобрать</button>
            <!-- </div> -->
            </form>

    </div>