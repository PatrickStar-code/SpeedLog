<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4" id="conteudo">
    <nav class="flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a  class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
                </a>
            </li>
 
        </ol>
    </nav>
    <div class="flex flex-wrap my-5 -mx-2">
        <div class="w-full lg:w-1/3 p-2">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-[#00968f] to-[#00fff4] rounded-md p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.5 7.27783L12 12.0001M12 12.0001L3.49997 7.27783M12 12.0001L12 21.5001M14 20.889L12.777 21.5684C12.4934 21.726 12.3516 21.8047 12.2015 21.8356C12.0685 21.863 11.9315 21.863 11.7986 21.8356C11.6484 21.8047 11.5066 21.726 11.223 21.5684L3.82297 17.4573C3.52346 17.2909 3.37368 17.2077 3.26463 17.0893C3.16816 16.9847 3.09515 16.8606 3.05048 16.7254C3 16.5726 3 16.4013 3 16.0586V7.94153C3 7.59889 3 7.42757 3.05048 7.27477C3.09515 7.13959 3.16816 7.01551 3.26463 6.91082C3.37368 6.79248 3.52345 6.70928 3.82297 6.54288L11.223 2.43177C11.5066 2.27421 11.6484 2.19543 11.7986 2.16454C11.9315 2.13721 12.0685 2.13721 12.2015 2.16454C12.3516 2.19543 12.4934 2.27421 12.777 2.43177L20.177 6.54288C20.4766 6.70928 20.6263 6.79248 20.7354 6.91082C20.8318 7.01551 20.9049 7.13959 20.9495 7.27477C21 7.42757 21 7.59889 21 7.94153L21 12.5001M7.5 4.50008L16.5 9.50008M16 18.0001L18 20.0001L22 16.0001" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>            </div>
                <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                    <div class="text-xs whitespace-nowrap">
                       Valor de Entregas Realizadas
                    </div>
                    <div class="">
                    R$ 
                        <?php if($retorno2[0]->total_entregas == null){
                            echo 0;
                        }else{
                            echo number_format($retorno2[0]->total_entregas,2,".","");
                        } ?>
                    </div>
                </div>
                <div class=" flex items-center flex-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 p-2 ">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-[#00968f] to-[#00fff4] rounded-md p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                    <svg  viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M4 1C3.447 1 3 1.448 3 2L3 10C3 10.553 3.447 11 4 11L15 11C15.553 11 16 10.553 16 10L16 2C16 1.448 15.553 1 15 1L4 1 z M 37.164062 9.5C35.289759 9.5 33.707216 10.100433 32.857422 11L27 11 A 1.0001 1.0001 0 1 0 27 13L32.259766 13C32.645045 14.435874 34.65739 15.5 37.164062 15.5C38.270063 15.5 38.997172 15.287031 39.451172 14.832031C40.016172 14.264031 40.014719 13.463453 40.011719 12.689453L40.009766 12.498047L40.011719 12.308594C40.014719 11.535594 40.017172 10.735969 39.451172 10.167969C38.997172 9.7119687 38.272922 9.5 37.169922 9.5L37.164062 9.5 z M 2 13C1.447 13 1 13.448 1 14L1 22C1 22.552 1.447 23 2 23L11.015625 23C11.141625 21.347 12.102 19.217484 14 19.021484L14 14C14 13.448 13.553 13 13 13L2 13 z M 33.248047 16.685547C34.111047 23.246547 32.823125 29.604359 29.828125 33.193359C28.272125 35.056359 26.401578 36 24.267578 36C23.280578 36 22.695906 35.350687 22.378906 34.804688C21.522906 33.329687 21.375734 30.4365 23.302734 26.5625C22.012734 26.8515 20.394547 27 18.435547 27C17.257114 27 14.548266 26.991755 12.748047 26.035156C12.564418 25.937694 12.392472 25.829279 12.230469 25.710938C11.915435 25.480918 11.640065 25.214349 11.435547 24.894531C11.363467 24.927922 11.299313 24.965842 11.228516 25L1 25C0.447 25 0 25.448 0 26C0 26.553 0.447 27 1 27L8.140625 27C5.1303891 29.545041 4.0970005 32.516944 4.0371094 32.726562C3.9621094 32.992562 3.9995781 33.278625 4.1425781 33.515625C4.2855781 33.752625 4.5190625 33.920516 4.7890625 33.978516L19.869141 38L31.058594 38C31.023594 37.69 31 37.362 31 37C31 31.673 36.14 27 42 27C42.181 27 42.352391 27.009578 42.525391 27.017578C42.167391 23.010578 40.234813 19.650906 38.507812 17.378906C38.093812 17.451906 37.653062 17.5 37.164062 17.5C35.690063 17.5 34.351047 17.202547 33.248047 16.685547 z M 14.28125 21C14.184077 21 14.090938 21.029755 14 21.076172C13.998509 21.076936 13.997583 21.079303 13.996094 21.080078C13.882067 21.139256 13.775918 21.234863 13.675781 21.351562C13.662059 21.367468 13.648179 21.381642 13.634766 21.398438C13.535952 21.522709 13.444734 21.665208 13.365234 21.828125C13.265172 22.032233 13.18821 22.260101 13.126953 22.494141C13.107622 22.56791 13.098893 22.636507 13.083984 22.710938C13.064878 22.805995 13.03673 22.899883 13.025391 22.994141C13.033791 22.993923 13.04048 22.988703 13.048828 22.988281C13.033436 23.115491 13 23.246564 13 23.367188C13 24.385188 14.858547 25 18.435547 25C22.014547 25 25 24.386188 25 23.367188C25 22.350188 24.426797 21 23.716797 21L14.28125 21 z M 42 29C37.475 29 33 32.574 33 37C33 39.74 34.19 40 35 40C36.659 40 36 36.598 40 35C41.175 34.531 42.330391 34.384766 43.400391 34.384766C45.209391 34.384766 46.774109 34.804688 47.787109 34.804688C48.552109 34.804688 49.001953 34.564703 49.001953 33.720703C49.000953 32.999703 47.704 29 42 29 z M 43.179688 36.392578C42.282688 36.414578 41.479187 36.563422 40.742188 36.857422C40.554187 36.932422 40.385562 37.012703 40.226562 37.095703C40.087562 37.369703 40 37.673 40 38C40 39.103 40.897 40 42 40C43.103 40 44 39.103 44 38C44 37.339 43.674687 36.756578 43.179688 36.392578 z M 6.1933594 36.421875C6.0743594 36.937875 6 37.465 6 38C6 41.859 9.141 45 13 45C16.172 45 18.853938 42.876516 19.710938 39.978516C19.590938 39.969516 19.470516 39.964594 19.353516 39.933594L16.78125 39.246094C16.25425 40.839094 14.768 42 13 42C10.794 42 9 40.206 9 38C9 37.723 9.0348437 37.454359 9.0898438 37.193359L6.1933594 36.421875 z M 45.732422 36.59375C45.898422 37.03375 46 37.504 46 38C46 40.206 44.206 42 42 42C40.262 42 38.795141 40.880125 38.244141 39.328125C38.220141 39.376125 38.196828 39.424656 38.173828 39.472656C37.816828 40.207656 37.264 41.317297 36.125 41.779297C37.384 43.731297 39.565 45 42 45C45.859 45 49 41.859 49 38C49 37.545 48.940516 37.096297 48.853516 36.654297C48.534516 36.742297 48.190156 36.804688 47.785156 36.804688C47.208156 36.804688 46.583875 36.715141 45.921875 36.619141C45.861875 36.610141 45.793422 36.60275 45.732422 36.59375 z M 11.029297 37.712891C11.015297 37.807891 11 37.902 11 38C11 39.103 11.897 40 13 40C13.843 40 14.562469 39.472422 14.855469 38.732422L11.029297 37.712891 z"></path></g></svg>
                </div>
                <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                    <div class="text-xs whitespace-nowrap">
                        Entregas Selecionadas
                    </div>
                    <div class="">
                        <?php echo $retorno[0]->contagem ?>
                    </div>
                </div>
                <div class=" flex items-center flex-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 p-2">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-[#00968f] to-[#00fff4] rounded-md p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="object-scale-down transition duration-500">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>
                </div>
                <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                    <div class="text-xs whitespace-nowrap">
                        Ganhos estimados
                    </div>
                    <div class="">R$ 
                        <?php if($retorno[0]->preco == null){
                            echo 0;
                        }else{
                            echo number_format($retorno[0]->preco,2,".","");
                        } ?>
                    </div>
                </div>
                <div class=" flex items-center flex-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </div>
            </div>
        </div>
    </div>
    <!-- component -->
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">Entregas Em Transporte</h1>
    <div class="flex items-center justify-center">

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

            <!-- 1 card -->
            <?php foreach ($entregas as $entrega) {?>
            <!-- <button type="button" data-modal-target="defaultModal" data-modal-show="defaultModal"> -->
                <div class="card mt-14 relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl transform transition duration-500 hover:scale-110">
                    <div class=" text-white flex items-center absolute rounded-full  py-8 px-4 shadow-xl bg-emerald-500 left-4 -top-6">
                        <i class="fa-solid fa-map-location-dot fa-2xl"></i>    
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2"><?php echo $entrega->desc_entrega ?></p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <span class="material-symbols-outlined">
                                home_pin
                            </span>

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p><?php echo $entrega->logradouro_origem.", ". $entrega->numero_origem_entrega ?></p>
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <span class="material-symbols-outlined">
                                distance
                            </span>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p><?php echo $entrega->logradouro_destino.", ". $entrega->numero_destino_entrega ?></p>
                        </div>
                        <div class="border-t-2"></div>

                        <div class="flex justify-between">
                            <div class="my-2">
                                <p class="font-semibold text-base mb-2">Peso</p>
                                <div class="flex space-x-2">
                                    <p><?php echo $entrega->peso_entrega." Kg"?></p>
                                </div>
                            </div>
                            <div class="my-2">
                                <p class="font-semibold text-base mb-2">Valor</p>
                                <div class="text-base text-gray-400 font-semibold">
                                    <p>R$ <?php echo $entrega->valor_70p ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mt-5">
                    <button class="confirmar_pedido text-white bg-[#00968f] hover:bg-emerald-700  font-medium rounded-lg text-sm px-4 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800 mr-5" type="button" id="<?php echo $entrega->idEntregas ?>"><i class="fa-solid fa-clipboard-check"></i></button>
                    <button class="vizualizar_rota text-white bg-[#00968f] hover:bg-emerald-700  font-medium rounded-lg text-sm px-4 py-2.5 mr-2 dark:bg-[#00968f] dark:hover:bg-[#002D2B] focus:outline-none dark:focus:ring-blue-800" type="button" id="rota- <?php echo $entrega->idEntregas ?>"><i class="fa-solid fa-magnifying-glass-location"></i></button>
</div>
                </div>
                <?php } ?>

            <!-- </button> -->
        </div>
    </div>