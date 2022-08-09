<div class="sh-hours-whatsapp-outer">
    <div class="sh-hours-whatsapp-inner">
        <div class="sh-hours sh-hours-wpp-item">
            <span class="sh-icon">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="20" fill="#f99374"/>
                    <path d="M20 10C25.514 10 30 14.486 30 20C30 25.514 25.514 30 20 30C14.486 30 10 25.514 10 20C10 14.486 14.486 10 20 10ZM20 8C13.373 8 8 13.373 8 20C8 26.627 13.373 32 20 32C26.627 32 32 26.627 32 20C32 13.373 26.627 8 20 8ZM21 20V14H19V22H26V20H21Z" fill="white"/>
                </svg>
            </span>
            <span class="sh-hours-text">
                <?= get_field('atendimento', 'option');?>
            </span>
        </div>
        <a href="<?= get_field('whatsapp-link', 'option');?>" class="sh-whatsapp sh-hours-wpp-item">
            <span class="sh-icon">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.0543 10.801C15.4875 10.801 10.962 15.3265 10.9603 20.8915C10.9585 23.163 11.6253 24.864 12.7435 26.6438L11.725 30.3678L15.5435 29.365C17.255 30.38 18.8878 30.989 21.0473 30.9907C26.6088 30.9907 31.1395 26.4635 31.1413 20.9002C31.143 15.323 26.635 10.8027 21.0543 10.801V10.801ZM26.9903 25.228C26.7383 25.9368 25.5255 26.5825 24.9428 26.67C24.4195 26.7487 23.758 26.7802 23.0318 26.5492C22.5908 26.4092 22.0255 26.222 21.3028 25.9105C18.2595 24.5962 16.2732 21.532 16.121 21.3308C15.9687 21.1278 14.882 19.6857 14.882 18.193C14.882 16.7002 15.666 15.9652 15.9443 15.6625C16.2225 15.3597 16.5497 15.2827 16.7527 15.2827L17.3337 15.2933C17.5192 15.302 17.7695 15.2232 18.0163 15.8147C18.2683 16.422 18.8755 17.9148 18.9508 18.067C19.026 18.2193 19.0768 18.396 18.9753 18.599C18.8738 18.802 18.823 18.928 18.6725 19.1047L18.2175 19.6367C18.0652 19.7872 17.9077 19.9517 18.0845 20.2562C18.2612 20.5607 18.8703 21.553 19.7715 22.358C20.93 23.3923 21.9083 23.7125 22.211 23.863C22.5138 24.0135 22.6905 23.989 22.869 23.7878C23.0457 23.5848 23.6267 22.9023 23.8297 22.5978C24.0327 22.295 24.234 22.344 24.5122 22.4455C24.7905 22.547 26.2815 23.2803 26.5842 23.4325C26.887 23.5848 27.09 23.66 27.1652 23.786C27.244 23.912 27.244 24.5193 26.9903 25.228V25.228ZM21 0C9.40275 0 0 9.40275 0 21C0 32.5972 9.40275 42 21 42C32.5972 42 42 32.5972 42 21C42 9.40275 32.5972 0 21 0ZM21.0508 33.04C19.019 33.04 17.017 32.529 15.2443 31.563L8.8095 33.25L10.5315 26.9587C9.46925 25.1177 8.90925 23.0283 8.911 20.8898C8.91275 14.196 14.3588 8.75 21.0508 8.75C24.2988 8.75175 27.3473 10.0152 29.638 12.3095C31.9305 14.6037 33.1922 17.654 33.1905 20.8985C33.1887 27.5923 27.7428 33.04 21.0508 33.04V33.04Z" fill="#64B161"/>
                </svg>
            </span>
            <span class="sh-whatsapp-text"><?= get_field('whatsapp', 'option');?></span>
        </a>
    </div>
</div> 