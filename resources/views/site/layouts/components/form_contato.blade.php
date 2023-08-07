 <form action={{ route('site.contato') }} method="post">
     @csrf
     <input name="nome" type="text" placeholder="Nome" class="borda-preta" type="text">
     <br>
     <input name="telefone" type="text" placeholder="Telefone" class="borda-preta" type="tel">
     <br>
     <input name="motivo_contato" type="text" placeholder="E-mail" class="borda-preta" type="email">
     <br>
     <select class="borda-preta">
         <option value="">Qual o motivo do contato?</option>
         <option value="1">Dúvida</option>
         <option value="2">Elogio</option>
         <option value="3">Reclamação</option>
     </select>
     <br>
     <textarea name="mensagem" class="borda-preta" placeholder="Preencha aqui sua informação!"></textarea>
     <br>
     <button type="submit" class="borda-preta">ENVIAR</button>
 </form>
