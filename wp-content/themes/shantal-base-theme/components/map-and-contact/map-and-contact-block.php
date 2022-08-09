<div class="sh-contact-n-map-outer">
    <div class="sh-contact-n-map-inner">
        <div class="sh-contact-n-map">
            <div class="sh-mnc-contact">
                <form id="llCaptureForm" class="llformCustom"  style="background-color: rgba(255, 255, 255, 1) !important;"  action="//paginas.rocks/capture" method="post">
                    <input type="hidden" id="mid" name="mid" value="627141" />
                    <input type="hidden" id="fid" name="fid" value="50376" />
                    <input type="hidden" id="formType" name="formType" value="dynamic" />
                    <div>
                        <label  style="color: rgba(150, 150, 150, 1) !important;"  for="llfield65751">Nome</label>
                        <input type="text" id="llfield65751" name="llfield65751" placeholder="Nome" data-required="true" />
                        <div class="field-error" id="llerror65751"></div>
                    </div>
                    <div>
                        <label  style="color: rgba(150, 150, 150, 1) !important;"  for="llfield65753">Telefone</label>
                        <input type="tel" id="llfield65753" name="llfield65753" placeholder="Telefone" data-required="true" />
                        <div class="field-error" id="llerror65753"></div>
                    </div>
                    <div>
                        <label  style="color: rgba(150, 150, 150, 1) !important;"  for="llfield65752">E-mail</label>
                        <input type="email" id="llfield65752" name="llfield65752" placeholder="E-mail" data-required="true" />
                        <div class="field-error" id="llerror65752"></div>
                    </div>
                    <div>
                        <label  style="color: rgba(150, 150, 150, 1) !important;"  for="llfield65755">Mensagem</label>
                        <textarea id="llfield65755" name="llfield65755" placeholder="Mensagem" data-required="true"></textarea>
                        <div class="field-error" id="llerror65755"></div>
                    </div>
                    <div>
                        <div class="field-error" id="LGPDValidation"></div>
                        <div class="checkbox-list" data-required="true" style="color: rgba(150, 150, 150, 1) !important;"  >
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="LGPDValidation" name="LGPDValidation" style="-webkit-appearance: auto !important;" value="1" /> Ao clicar no botão "enviar" eu concordo com a <a href="http://www.clinicafisiobianchini.com.br/politica-de-privacidade" target="_blank">Política de Privacidade</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="button-bar">
                        <button  style="background-color: #f99374 !important;"  type="submit">Enviar</button>
                    </div>
                    <div class="loading-box">
                        <img src="//paginas.rocks/content/images/spinner.gif" />
                        <div>loading...</div>
                    </div>
                    <div class="error-box">
                        <img src="//paginas.rocks/content/images/error-icon.png" />
                        <div></div>
                        <button type="button" class="btn" id="btn-error">Ok</button>
                    </div>
                    <img src="https://llimages.com/redirect/redirect.aspx?A=V&f=50376&m=627141" style="display: none;" />
                </form>
            </div>
            <div class="sh-mnc-map">
                <a href="<?= $args['link'];?>" target="_blank">
                    <img src="<?= $args['image']['url'];?>" alt="">
                </a>
            </div>
        </div>
    </div>
</div>