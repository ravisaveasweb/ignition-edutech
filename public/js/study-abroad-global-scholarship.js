
document.addEventListener('DOMContentLoaded',function(){
    const root=document.querySelector('.sa-global-scholarship');
    if(!root)return;

    // Elements
    const heroSearch=document.getElementById('globalScholarshipHeroSearch');
    const directorySearch=document.getElementById('globalScholarshipSearch');
    const heroSearchBtn=document.getElementById('globalScholarshipHeroSearchBtn');
    const clearAllBtn=document.getElementById('globalScholarshipClearAll');
    const activeFilterContainer=document.getElementById('globalScholarshipActiveFilters');
    const dropdowns=Array.from(root.querySelectorAll('.sgs-filter-dropdown'));
    const triggers=Array.from(root.querySelectorAll('.sgs-filter-trigger'));
    const closeButtons=Array.from(root.querySelectorAll('.sgs-filter-close'));
    const applyButtons=Array.from(root.querySelectorAll('.sgs-apply-dropdown'));
    const dropdownInputs=Array.from(root.querySelectorAll('input[data-dropdown-type]'));

    // Filter Types
    const filterTypes=['country','degree','subject','funding'];

    // Get selected values
    function getSelectedValues(type){
        const values=[];
        root.querySelectorAll('input[data-dropdown-type="'+type+'"]').forEach(function(input){
            if(input.checked&&!values.includes(input.value))values.push(input.value);
        });
        return values;
    }

    // Synchronize changed input
    function synchronizeChangedInput(changedInput){
        if(!changedInput)return;

        const type=changedInput.dataset.dropdownType;
        const value=changedInput.value;
        const checked=changedInput.checked;

        if(!type||value===undefined)return;

        root.querySelectorAll('input[data-dropdown-type="'+type+'"]').forEach(function(input){
            if(input.value===value)input.checked=checked;
        });
    }

    // Update selected count
    function updateSelectedCount(dropdown){
        if(!dropdown)return;

        const inputs=dropdown.querySelectorAll('input[data-dropdown-type]:checked');
        const countElement=dropdown.querySelector('.sgs-selected-count strong');

        if(countElement)countElement.textContent=inputs.length;
    }

    // Update all dropdown counts
    function updateAllSelectedCounts(){
        dropdowns.forEach(function(dropdown){
            updateSelectedCount(dropdown);
        });
    }

    // Close all dropdowns
    function closeAllDropdowns(except=null){
        dropdowns.forEach(function(dropdown){
            if(dropdown!==except)dropdown.classList.remove('open');
        });
    }

    // Build filter URL
    function buildFilterUrl(){
        const params=new URLSearchParams(window.location.search);
        params.delete('page');

        // Remove existing filters
        filterTypes.forEach(function(type){
            params.delete(type);
            params.delete(type+'[]');
        });

        // Add current filters
        filterTypes.forEach(function(type){
            const values=getSelectedValues(type);
            values.forEach(function(value){
                params.append(type+'[]',value);
            });
        });

        // Search
        const directoryValue=directorySearch?.value.trim()||'';
        const heroValue=heroSearch?.value.trim()||'';
        const searchValue=directoryValue||heroValue;

        if(searchValue){
            params.set('search',searchValue);
        }else{
            params.delete('search');
        }

        const query=params.toString();
        return window.location.pathname+(query?'?'+query:'');
    }

    // Apply filters
    function applyFilters(){
        window.location.href=buildFilterUrl();
    }

    // Search synchronization
    if(heroSearch&&directorySearch){
        heroSearch.addEventListener('input',function(){
            directorySearch.value=this.value;
        });

        directorySearch.addEventListener('input',function(){
            heroSearch.value=this.value;
        });
    }

    // Hero search Enter
    if(heroSearch){
        heroSearch.addEventListener('keydown',function(event){
            if(event.key==='Enter'){
                event.preventDefault();
                applyFilters();
            }
        });
    }

    // Directory search Enter
    if(directorySearch){
        directorySearch.addEventListener('keydown',function(event){
            if(event.key==='Enter'){
                event.preventDefault();
                applyFilters();
            }
        });
    }

    // Hero search button
    if(heroSearchBtn){
        heroSearchBtn.addEventListener('click',function(event){
            event.preventDefault();
            applyFilters();
        });
    }

    // Dropdown triggers
    triggers.forEach(function(trigger){
        trigger.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            const dropdown=this.closest('.sgs-filter-dropdown');
            if(!dropdown)return;

            const isOpen=dropdown.classList.contains('open');
            closeAllDropdowns(dropdown);
            dropdown.classList.toggle('open',!isOpen);
        });
    });

    // Close button
    closeButtons.forEach(function(button){
        button.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            const dropdown=this.closest('.sgs-filter-dropdown');
            if(dropdown)dropdown.classList.remove('open');
        });
    });

    // Stop menu click
    dropdowns.forEach(function(dropdown){
        const menu=dropdown.querySelector('.sgs-filter-menu');
        if(!menu)return;

        menu.addEventListener('click',function(event){
            event.stopPropagation();
        });
    });

    // Outside click
    document.addEventListener('click',function(event){
        if(!event.target.closest('.sgs-filter-dropdown'))closeAllDropdowns();
    });

    // Escape key
    document.addEventListener('keydown',function(event){
        if(event.key==='Escape')closeAllDropdowns();
    });

    // Dropdown search
    root.querySelectorAll('.sgs-dropdown-search').forEach(function(searchInput){
        searchInput.addEventListener('input',function(){
            const searchValue=this.value.trim().toLowerCase();
            const menu=this.closest('.sgs-filter-menu');
            if(!menu)return;

            menu.querySelectorAll('.sgs-filter-option').forEach(function(option){
                const optionName=option.querySelector('.sgs-option-name');
                const text=optionName?.textContent.trim().toLowerCase()||'';
                option.style.display=!searchValue||text.includes(searchValue)?'':'none';
            });
        });
    });

    // Filter option change
    dropdownInputs.forEach(function(input){
        input.addEventListener('change',function(){
            // Synchronize the changed option across all dropdowns
            synchronizeChangedInput(this);

            // Update dropdown counts
            updateAllSelectedCounts();
        });
    });

    // Apply dropdown button
    applyButtons.forEach(function(button){
        button.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            const filterType=this.dataset.applyFilter;
            if(!filterType)return;

            // Inputs are already synchronized
            updateAllSelectedCounts();
            applyFilters();
        });
    });

    // Clear all filters
    if(clearAllBtn){
        clearAllBtn.addEventListener('click',function(event){
            event.preventDefault();

            const baseUrl=this.getAttribute('href')||window.location.pathname;
            window.location.href=baseUrl;
        });
    }

    // Active filter chip removal
    if(activeFilterContainer){
        activeFilterContainer.addEventListener('click',function(event){
            const button=event.target.closest('.sa-global-scholarship-filter-chip button');
            if(!button)return;

            event.preventDefault();

            const chip=button.closest('.sa-global-scholarship-filter-chip');
            if(!chip)return;

            const filterType=chip.dataset.filterType;
            const filterValue=chip.dataset.filterValue;
            if(!filterType||!filterValue)return;

            const params=new URLSearchParams(window.location.search);
            params.delete('page');

            let values=params.getAll(filterType+'[]');

            if(!values.length){
                const singleValue=params.get(filterType);
                if(singleValue)values=[singleValue];
            }

            params.delete(filterType+'[]');
            params.delete(filterType);

            values.filter(function(value){
                return value!==filterValue;
            }).forEach(function(value){
                params.append(filterType+'[]',value);
            });

            const query=params.toString();
            window.location.href=window.location.pathname+(query?'?'+query:'');
        });
    }

    // Reset dropdown search
    function resetDropdownSearch(dropdown){
        if(!dropdown)return;

        const searchInput=dropdown.querySelector('.sgs-dropdown-search');

        if(searchInput)searchInput.value='';

        dropdown.querySelectorAll('.sgs-filter-option').forEach(function(option){
            option.style.display='';
        });
    }

    // Reset other dropdown searches
    triggers.forEach(function(trigger){
        trigger.addEventListener('click',function(){
            const currentDropdown=this.closest('.sgs-filter-dropdown');

            dropdowns.forEach(function(dropdown){
                if(dropdown!==currentDropdown)resetDropdownSearch(dropdown);
            });
        });
    });

    // Initialize filters from URL
    function initializeFromUrl(){
        const params=new URLSearchParams(window.location.search);

        filterTypes.forEach(function(type){
            let values=params.getAll(type+'[]');

            // Support normal and single-value URL parameters
            if(!values.length){
                const singleValue=params.get(type);
                if(singleValue)values=[singleValue];
            }

            root.querySelectorAll('input[data-dropdown-type="'+type+'"]').forEach(function(input){
                input.checked=values.includes(input.value);
            });
        });

        // Restore search
        const searchValue=params.get('search')||'';

        if(heroSearch)heroSearch.value=searchValue;
        if(directorySearch)directorySearch.value=searchValue;

        updateAllSelectedCounts();
    }

    // Remove client-side card filtering
    root.querySelectorAll('.sa-global-scholarship-card').forEach(function(card){
        card.classList.remove('hidden');
    });

    // Initialize
    initializeFromUrl();
    updateAllSelectedCounts();
});

