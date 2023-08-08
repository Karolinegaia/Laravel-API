 <form action={{ route('site.contato') }} method="post">
     @csrf
     <input name="nome" type="text" placeholder="Nome" class="{{$classe}}" type="text">
     <br>
     <input name="telefone" type="text" placeholder="Telefone" class="{{$classe}}" type="tel">
     <br>
     <input name="motivo_contato" type="text" placeholder="E-mail" class="{{$classe}}" type="email">
     <br>
     <select class="{{$classe}}">
         <option value="">Qual o motivo do contato?</option>
         <option value="1">Dúvida</option>
         <option value="2">Elogio</option>
         <option value="3">Reclamação</option>
     </select>
     <br>
     <textarea name="mensagem" class="{{$classe}}" placeholder="Preencha aqui sua informação!"></textarea>
     <br>
     <button type="submit" class="{{$classe}}">ENVIAR</button>
 </form>
