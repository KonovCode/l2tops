<div class="bg-gray-800 py-2 opacity-90 flex justify-between px-2 md:px-3  items-center" style="margin-top: 300px">
        
        <section class="md:block hidden w-4/12">
            <h2 class="text-center text-white text-xl font-bold">Анонсы серверов</h2>
        </section>

        <form method="GET" class="sm:w-full md:w-11/12 lg:w-5/12 flex justify-evenly items-center">
            <label class="text-white text-xs sm:text-sm md:text-lg" for="rates">Рейты
            <select class="h-8 text-xs text-black rounded" name="rates" id="rates" style="min-width: 100px">
                <option value="">Любые</option>
                <option value="1">x1</option>
                <option value="3">x3</option>
                <option value="5">x5</option>
                <option value="7">x7</option>
                <option value="10">x10</option>
                <option value="50">x50</option>
                <option value="100">x100</option>
                <option value="1000">x1000</option>
                <option value="1200">x1200</option>
                <option value="10000">x10000</option>
                <option value="50000">x50000</option>
                <option value="GVE">GVE</option>
                <option value="RvR">RvR</option>

            </select>
             </label>

             <!-- <div class="flex flex-wrap"> -->

             <label class="text-white text-xs sm:text-sm md:text-lg" for="chronicles">
                Хроники
                <select class="h-8 text-xs text-black rounded h-8" name="chronicles" id="chronicles" style="min-width: 100px">
                    <option value="">Любые хроники</option>
                    <option value="Interlude">Interlude</option>
                    <option value="Gracia">Gracia</option>
                    <option value="Interlude+">Interlude+</option>
                </select>
             </label>

             <button type="submit" class="bg-blue-500 text-xs sm:text-sm md:text-lg px-1 md:px-3 py-1 h-12 ml-1 md:h-9 md:ml-0 text-white rounded">Подобрать</button>
            <!-- </div> -->
            </form>

    </div>