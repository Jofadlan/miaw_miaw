
public function up()
{
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('transaction_id');
        $table->decimal('price', 8, 2);
        $table->string('bukti')->default('default_value'); // Add default value
        $table->timestamps();
    });
}
