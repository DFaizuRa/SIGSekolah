public function up()
{
    Schema::create('schools', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('latitude', 10, 6);
        $table->decimal('longitude', 10, 6);
        $table->timestamps();
    });
}
