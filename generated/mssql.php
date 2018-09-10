<?php

namespace Safe;

use Safe\Exceptions\MssqlException;

/**
 * Closes the link to a MS SQL Server database that's associated with the
 * specified link identifier.  If the link identifier isn't specified, the
 * last opened link is assumed.
 * 
 * Note that this isn't usually necessary, as non-persistent open
 * links are automatically closed at the end of the script's
 * execution.
 * 
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * mssql_connect.
 * 
 * This function will not close persistent links generated by
 * mssql_pconnect.
 * @throws MssqlException
 * 
 */
function mssql_close($link_identifier = null): void
{
    error_clear_last();
    if ($link_identifier !== null) {
        $result = \mssql_close($link_identifier);
    }else {
        $result = \mssql_close();
    }
    if ($result === FALSE) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * mssql_data_seek moves the internal row
 * pointer of the MS SQL result associated with the specified result
 * identifier to point to the specified row number, first row being
 * number 0. The next call to mssql_fetch_row
 * would return that row.
 * 
 * @param resource $result_identifier The result resource that is being evaluated.
 * @param int $row_number The desired row number of the new result pointer.
 * @throws MssqlException
 * 
 */
function mssql_data_seek($result_identifier, int $row_number): void
{
    error_clear_last();
    $result = \mssql_data_seek($result_identifier, $row_number);
    if ($result === FALSE) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * Seeks to the specified field offset.  If the next call to
 * mssql_fetch_field won't include a field
 * offset, this field would be returned.
 * 
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to mssql_query.
 * @param int $field_offset The field offset, starts at 0.
 * @throws MssqlException
 * 
 */
function mssql_field_seek($result, int $field_offset): void
{
    error_clear_last();
    $result = \mssql_field_seek($result, $field_offset);
    if ($result === FALSE) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * mssql_free_result only needs to be called
 * if you are worried about using too much memory while your script
 * is running. All result memory will automatically be freed when
 * the script ends. You may call mssql_free_result
 * with the result identifier as an argument and the associated
 * result memory will be freed.
 * 
 * @param resource $result The result resource that is being freed. This result comes from a
 * call to mssql_query.
 * @throws MssqlException
 * 
 */
function mssql_free_result($result): void
{
    error_clear_last();
    $result = \mssql_free_result($result);
    if ($result === FALSE) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * mssql_free_statement only needs to be called
 * if you are worried about using too much memory while your script
 * is running. All statement memory will automatically be freed when
 * the script ends. You may call mssql_free_statement
 * with the statement identifier as an argument and the associated
 * statement memory will be freed.
 * 
 * @param resource $stmt Statement resource, obtained with mssql_init.
 * @throws MssqlException
 * 
 */
function mssql_free_statement($stmt): void
{
    error_clear_last();
    $result = \mssql_free_statement($stmt);
    if ($result === FALSE) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * Initializes a stored procedure or a remote stored procedure.
 * 
 * @param string $sp_name Stored procedure name, like ownew.sp_name or
 * otherdb.owner.sp_name.
 * @param resource $link_identifier A MS SQL link identifier, returned by 
 * mssql_connect.
 * @return resource Returns a resource identifier "statement", used in subsequent calls to
 * mssql_bind and mssql_execute,
 * s.
 * @throws MssqlException
 * 
 */
function mssql_init(string $sp_name, $link_identifier = null)
{
    error_clear_last();
    if ($link_identifier !== null) {
        $result = \mssql_init($sp_name, $link_identifier);
    }else {
        $result = \mssql_init($sp_name);
    }
    if ($result === FALSE) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * mssql_select_db sets the current active
 * database on the server that's associated with the specified link
 * identifier.
 * 
 * Every subsequent call to mssql_query will be
 * made on the active database.
 * 
 * @param string $database_name The database name.
 * 
 * To escape the name of a database that contains spaces, hyphens ("-"),
 * or any other exceptional characters, the database name must be
 * enclosed in brackets, as is shown in the example, below. This
 * technique must also be applied when selecting a database name that is
 * also a reserved word (such as primary).
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * mssql_connect or
 * mssql_pconnect.
 * 
 * If no link identifier is specified, the last opened link is assumed.
 * If no link is open, the function will try to establish a link as if
 * mssql_connect was called, and use it.
 * @throws MssqlException
 * 
 */
function mssql_select_db(string $database_name, $link_identifier = null): void
{
    error_clear_last();
    if ($link_identifier !== null) {
        $result = \mssql_select_db($database_name, $link_identifier);
    }else {
        $result = \mssql_select_db($database_name);
    }
    if ($result === FALSE) {
        throw MssqlException::createFromPhpError();
    }
}

