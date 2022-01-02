#include<bits/stdc++.h>
using namespace std;
long n,dem,m;
string s;
int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    getline(cin,s);
    dem=1;
    for(long i=1;i<s.size();i++)
        if(s[i-1]==s[i]) dem++;
        else{
            if(dem>m) m=dem;
            dem=1;
        }
    if(dem>m) m=dem;
    cout<<m;
}
