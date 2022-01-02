#include<bits/stdc++.h>
using namespace std;
int main()
{
    long long a,b,c,tongbc;
    long long sum;
    int s[7];
    for (int i=1;i<=7;i++)
        cin >> s[i];
    sort(s+1,s+8);
    a=s[1];
    b=s[2];
    sum =s[7];
    tongbc=sum-a;
    c=tongbc-b;
    cout << a << " " << b << " " <<c;



}
